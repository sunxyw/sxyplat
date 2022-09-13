<?php

namespace App\Services;

class VerifyCodeService
{
    private function generate(int $length = 6): string
    {
        return bin2hex(random_bytes($length / 2));
    }

    public function generateAndStore(string $subject, string $key, int $length = 6, int $expires_minutes = 5): string
    {
        $code = $this->generate($length);
        cache()->put("verify-code:{$subject}.{$key}", $code, now()->addMinutes($expires_minutes));
        return $code;
    }

    public function verify(string $subject, string $key, string $code): bool
    {
        return cache()->pull("verify-code:{$subject}.{$key}") === $code;
    }
}
