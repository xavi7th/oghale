<?php

namespace App\Modules\SuperAdmin\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class ActivityNotification extends Notification //implements ShouldQueue
{
  use Queueable;

  protected $activity;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public function __construct(string $activity)
  {
    $this->activity =  $activity;
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
    return TelegramMessage::create()
      ->token(config('services.telegram.bot_id'))
      ->content($this->activity)
      // ->button('View Details', $this->sale_record_url);
      // Can only take
      //       <b>bold</b>, <strong>bold</strong>
      // <i>italic</i>, <em>italic</em>
      // <a href="URL">inline URL</a>
      // <code>inline fixed-width code</code>
      // <pre>pre-formatted fixed-width code block</pre>
      ->options([
        'parse_mode' => ''
      ]);

    // (Optional) Blade template for the content.
    // ->view('notification', ['url' => $url])
  }
}
