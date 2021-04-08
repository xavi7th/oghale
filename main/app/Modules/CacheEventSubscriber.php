<?php

namespace App\Modules\SuperAdmin\Listeners;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Cache;
use App\Modules\SuperAdmin\Events\ProductSaved;
use App\Modules\SuperAdmin\Events\AccessorySold;
use App\Modules\SuperAdmin\Events\AccessoryTypeSaved;
use App\Modules\SuperAdmin\Events\ProductSaleRecordSaved;
use App\Modules\SuperAdmin\Events\ProductSaleRecordConfirmed;
use App\Modules\SuperAdmin\Events\ProductDispatchRequestSaved;
use App\Modules\SuperAdmin\Events\ProductAccessoryStockUpdated;

class CacheEventSubscriber
{
  /**
   * Register the listeners for the subscriber.
   */
  public function subscribe(Dispatcher $events)
  {
    $events->listen(ProductAccessoryStockUpdated::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onProductAccessoryStockUpdated');
    $events->listen(AccessorySold::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onAccessorySold');
    $events->listen(ProductDispatchRequestSaved::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onProductDispatchRequestSaved');
    $events->listen(ProductSaved::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onProductSaved');
    $events->listen(ProductSaleRecordConfirmed::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onProductSaleRecordConfirmed');
    $events->listen(ProductSaleRecordSaved::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onProductSaleRecordSaved');
    $events->listen(AccessoryTypeSaved::class, 'App\Modules\SuperAdmin\Listeners\CacheEventSubscriber@onAccessoryTypeSaved');
  }

  static function onProductAccessoryStockUpdated(ProductAccessoryStockUpdated $event)
  {
    Cache::forget('allProductAccessories');
    Cache::forget('inStockProductAccessories');
  }

  static function onAccessorySold(AccessorySold $event)
  {
    Cache::forget('allProductAccessories');
    Cache::forget('inStockProductAccessories');
  }

  static function onProductDispatchRequestSaved(ProductDispatchRequestSaved $event)
  {
    Cache::forget('dispatchRequests');
    Cache::forget('completedDispatchRequests');
  }

  static function onProductSaved(ProductSaved $event)
  {
    Cache::forget($event->product->office_branch->city . 'officeBranchProducts');
    Cache::forget('products');
    Cache::forget('currentStock');
    Cache::forget('webAdminProducts');
    Cache::forget('dispatchAdminProducts');
    Cache::forget('stockKeeperProducts');
    Cache::forget('salesRepProducts');
    Cache::forget('qualityControlProducts');
    Cache::forget('brandsWithProductCount');
    Cache::forget('officeBranchesWithProductSalesRecordCount');
  }

  static function onProductSaleRecordSaved(ProductSaleRecordSaved $event)
  {
    Cache::forget('officeBranchesWithProductSalesRecordCount');
  }

  static function onProductSaleRecordConfirmed(ProductSaleRecordConfirmed $event)
  {
    Cache::forget('bank_payments');
  }

  static function onAccessoryTypeSaved(AccessoryTypeSaved $event)
  {
    Cache::forget('allProductAccessoryTypes');
  }
}
