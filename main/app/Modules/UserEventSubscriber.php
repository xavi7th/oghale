<?php

namespace App\Modules\SuperAdmin\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Modules\SuperAdmin\Models\ActivityLog;
use App\Modules\SuperAdmin\Events\UserLoggedIn;

class UserEventSubscriber implements ShouldQueue
{

  /**
   * Register the listeners for the subscriber.
   *
   * @param  \Illuminate\Events\Dispatcher  $events
   */
  public function subscribe($events)
  {
    $events->listen(UserLoggedIn::class, 'App\Modules\SuperAdmin\Listeners\UserEventSubscriber@onLoggedIn');
  }


  static function onLoggedIn(UserLoggedIn $event)
  {
    $message = $event->user->email  . ' logged into the ' . $event->user->getType() . ' dashboard';
    ActivityLog::notifySuperAdmins($message);
    // $event->loan_request->card_user->notify(new LoanOverdue($event->loan_request));
  }
}
