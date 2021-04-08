<?php

namespace App\Modules\SuperAdmin\Notifications;

use Throwable;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramChannel;

class ErrorAlertNotification extends Notification implements ShouldQueue
{
  use Queueable;

  protected $throwable;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public function __construct(Throwable $throwable)
  {
    $this->throwable =  $throwable;
  }

  /**
   * Get the notification's delivery channels.
   *
   * @return array
   */
  public function via()
  {
    return [TelegramChannel::class];
  }

  public function toTelegram()
  {
    Storage::disk('local')->put('error-trace.txt', "Error Code \n"  . $this->throwable->getCode() . PHP_EOL . "Stack Trace \n"  . PHP_EOL . $this->throwable->getTraceAsString() . PHP_EOL);

    return TelegramFile::create()
      ->token(config('services.telegram.bot_id'))
      ->to(config('services.telegram.error_alert_group'))
      ->content($this->throwable->getMessage())
      ->document(storage_path('app/error-trace.txt'), 'trace-logs.txt')
      ->button('Open App', route('app.login'));
    // ->options([
    //   'parse_mode' => ''
    // ]);
  }
}
