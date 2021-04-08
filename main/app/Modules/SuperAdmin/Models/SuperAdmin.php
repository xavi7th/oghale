<?php

namespace App\Modules\SuperAdmin\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\SuperAdmin\Models\SuperAdmin
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|SuperAdmin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SuperAdmin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SuperAdmin query()
 * @mixin \Eloquent
 */
class SuperAdmin extends User
{
    protected $fillable = ['email', 'password'];
    const DASHBOARD_ROUTE_PREFIX = 'super-panel';
}
