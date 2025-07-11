<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $module
 * @property string|null $description
 * @property int $has_create
 * @property int $has_edit
 * @property int $has_delete
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubModule> $subModules
 * @property-read int|null $sub_modules_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereHasCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereHasDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereHasEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Module withoutTrashed()
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $quote_number
 * @property string $quote_name
 * @property string $price_total
 * @property int $email_sent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereEmailSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote wherePriceTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereQuoteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereQuoteNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quote withoutTrashed()
 */
	class Quote extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $role
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RoleAccess> $role_accesses
 * @property-read int|null $role_accesses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\RoleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role withoutTrashed()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $role_id
 * @property int $sub_module_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Role $role
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess whereSubModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleAccess withoutTrashed()
 */
	class RoleAccess extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $sub_module_id
 * @property string $source
 * @property string|null $route_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\SubModule $subModule
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereRouteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereSubModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route withoutTrashed()
 */
	class Route extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $service
 * @property string $service_category
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServiceDetail> $serviceDetails
 * @property-read int|null $service_details_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereServiceCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service withoutTrashed()
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail withoutTrashed()
 */
	class ServiceDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $module_id
 * @property string $sub_module
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Module $module
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Route> $routes
 * @property-read int|null $routes_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereSubModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubModule withoutTrashed()
 */
	class SubModule extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Quote> $quotes
 * @property-read int|null $quotes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @property string $user_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole whereUserStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRole withoutTrashed()
 */
	class UserRole extends \Eloquent {}
}

