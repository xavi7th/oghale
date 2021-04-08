<?php

namespace App\Modules\SuperAdmin\Providers;

use App\Modules\SuperAdmin\Listeners\UserEventSubscriber;
use App\Modules\SuperAdmin\Listeners\CacheEventSubscriber;
use App\Modules\SuperAdmin\Listeners\ProductEventSubscriber;
use App\Modules\SuperAdmin\Listeners\ProductAccessoryEventSubscriber;
use App\Modules\SuperAdmin\Listeners\ProductSaleRecordEventSubscriber;
use App\Modules\SuperAdmin\Listeners\ProductDispatchRequestEventSubscriber;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class SuperAdminEventServiceProvider extends ServiceProvider
{
  /**
   * The event listener mappings for the application.
   *
   * @var array
   */
  protected $listen = [
    //
  ];

  /**
   * The subscriber classes to register.
   *
   * @var array
   */
  protected $subscribe = [
    UserEventSubscriber::class,
    ProductEventSubscriber::class,
    ProductSaleRecordEventSubscriber::class,
    ProductDispatchRequestEventSubscriber::class,
    ProductAccessoryEventSubscriber::class,
    CacheEventSubscriber::class,
  ];
}
