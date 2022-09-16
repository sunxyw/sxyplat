<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Stancl\Tenancy\Contracts\SyncMaster;
use Stancl\Tenancy\Database\Concerns\CentralConnection;
use Stancl\Tenancy\Database\Concerns\ResourceSyncing;
use Stancl\Tenancy\Database\Models\TenantPivot;

/**
 * @mixin IdeHelperCentralUser
 */
class CentralUser extends Authenticatable implements SyncMaster
{
    use HasFactory;
    use ResourceSyncing;
    use CentralConnection;
    use HasUuids;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tenants(): BelongsToMany
    {
        return $this->belongsToMany(Tenant::class, 'tenant_has_users', 'global_user_id', 'tenant_id', 'uuid')
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
        return 'uuid';
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
