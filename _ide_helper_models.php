<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\CentralUser
 *
 * @property int $id
 * @property string $global_id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Stancl\Tenancy\Database\TenantCollection|\App\Models\Tenant[] $tenants
 * @property-read int|null $tenants_count
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereGlobalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentralUser whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperCentralUser {}
}

namespace App\Models{
/**
 * App\Models\Tenant
 *
 * @property string $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array|null $data
 * @property-read \Illuminate\Database\Eloquent\Collection|\Stancl\Tenancy\Database\Models\Domain[] $domains
 * @property-read int|null $domains_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CentralUser[] $users
 * @property-read int|null $users_count
 * @method static \Stancl\Tenancy\Database\TenantCollection|static[] all($columns = ['*'])
 * @method static \Stancl\Tenancy\Database\TenantCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperTenant {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

