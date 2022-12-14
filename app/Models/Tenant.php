<?php

namespace App\Models;

use Illuminate\Support\Str;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\TenantPivot;

/**
 * @mixin IdeHelperTenant
 */
class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    public function users()
    {
        return $this->belongsToMany(CentralUser::class, 'tenant_has_users', 'tenant_id', 'global_user_id', 'id', 'uuid')
            ->using(TenantPivot::class);
    }

    public function getDomainAttribute(): string
    {
        $domain = $this->domains->first()->domain;
        if (str_contains($domain, '.')) {
            return $domain;
        }

        return $domain . '.' . Str::replace(['http://', 'https://'], '', config('app.url'));
    }
}
