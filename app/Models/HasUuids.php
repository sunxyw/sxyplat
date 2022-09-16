<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids as BaseHasUuids;
use Ramsey\Uuid\Uuid;

trait HasUuids
{
    use BaseHasUuids;

    /**
     * Get the primary key for the model.
     *
     * @return string
     */
    public function getKeyName(): string
    {
        return 'uuid';
    }

    /**
     * Generate a new UUID for the model.
     *
     * @return string
     */
    public function newUniqueId(): string
    {
        return Uuid::uuid7()->toString();
    }
}
