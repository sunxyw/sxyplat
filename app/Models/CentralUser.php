<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Stancl\Tenancy\Contracts\SyncMaster;
use Stancl\Tenancy\Database\Concerns\CentralConnection;
use Stancl\Tenancy\Database\Concerns\ResourceSyncing;
use Stancl\Tenancy\Database\Models\TenantPivot;

class CentralUser extends Authenticatable implements SyncMaster
{
    use HasFactory;
    use ResourceSyncing;
    use CentralConnection;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function tenants(): BelongsToMany
    {
        return $this->belongsToMany(Tenant::class, 'user_has_tenants', 'global_user_id', 'tenant_id')
            ->using(TenantPivot::class);
    }

    public function getTenantModelName(): string
    {
        return User::class;
    }

    public function getGlobalIdentifierKey()
    {
        return $this->getAttribute($this->getGlobalIdentifierKeyName());
    }

    public function getGlobalIdentifierKeyName(): string
    {
        return 'global_id';
    }

    public function getCentralModelName(): string
    {
        return self::class;
    }

    public function getSyncedAttributeNames(): array
    {
        return [
            'name',
            'email',
            'password',
        ];
    }
}
