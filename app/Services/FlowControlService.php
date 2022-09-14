<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FlowControlService
{
    private function getFlowControlKey(string $name, string $key, string $suffix = ''): string
    {
        return "flow-control:{$name}.{$key}{$suffix}";
    }

    private function generateKey(): string
    {
        return bin2hex(random_bytes(16));
    }

    public function storeMetaForFlow(string $name, string $key, array $meta): void
    {
        Cache::put($this->getFlowControlKey($name, $key, '.meta'), $meta);
    }

    public function getMetaForFlow(string $name, string $key): array
    {
        return Cache::get($this->getFlowControlKey($name, $key, '.meta'), []);
    }

    public function startFlow(string $name, string $key = null, int $expires_minutes = 5): string
    {
        $key = $key ?? $this->generateKey();
        Cache::put($this->getFlowControlKey($name, $key), 0, now()->addMinutes($expires_minutes));
        return $key;
    }

    public function setStep(string $name, string $key, int $step): void
    {
        Cache::put($this->getFlowControlKey($name, $key), $step);
    }

    public function nextStep(string $name, string $key): bool
    {
        return Cache::increment($this->getFlowControlKey($name, $key)) !== false;
    }

    public function endFlow(string $name, string $key): bool
    {
        return Cache::forget($this->getFlowControlKey($name, $key));
    }

    public function getStep(string $name, string $key): int
    {
        return Cache::get($this->getFlowControlKey($name, $key), 0);
    }

    public function isFlowStarted(string $name, string $key): bool
    {
        return Cache::has($this->getFlowControlKey($name, $key));
    }

    /**
     * Automatic flow control
     *
     * @param string      $name            Flow name
     * @param string|null $key             Flow key
     * @param int         $expires_minutes Flow expires minutes
     * @return array [string $key, int $step] Flow key and current step
     */
    public function autoFlow(string $name, string $key = null, int $expires_minutes = 5): array
    {
        $key = $key ?? $this->generateKey();
        if (!$this->isFlowStarted($name, $key)) {
            $this->startFlow($name, $key, $expires_minutes);
        }
        $this->nextStep($name, $key);
        return [$key, $this->getStep($name, $key)];
    }

//    public function autoWebFlow(string $name, Request $request, int $expires_minutes = 5): array
//    {
//        $key = $request->query('flow_key');
//        if (!$key) {
//            $key = $this->generateKey();
//        }
//
//    }
}
