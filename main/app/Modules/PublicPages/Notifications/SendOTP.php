<?php

namespace App\Modules\PublicPages\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\NexmoMessage;
use App\Modules\PublicPages\Notifications\Channels\TermiiSMSMessage;

class SendOTP extends Notification
{
  use Queueable;
  protected $otp;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public function __construct($otp)
  {
    $this->otp = $otp;
  }

  /**
   * Get the notification's delivery channels.
   *
   * @param mixed $app_user
   * @return array
   */
  public function via($app_user)
  {
    // return ['nexmo'];
    return [TermiiSMSMessage::class];
  }

  /**
   * Get the SMS representation of the notification.
   *
   * @param mixed $app_user
   * @return \Illuminate\Notifications\Messages\MailMessage
   */
  public function toNexmo($app_user)
  {
    return (new NexmoMessage)
      ->content(' DO NOT DISCLOSE. Your Capital X OTP code for phone number confirmation is ' . $this->otp . '.');
  }


  /**
   * Get the SMS representation of the notification.
   *
   * @param mixed $app_user
   */
  public function toTermiiSMS($app_user)
  {
    return (new TermiiSMSMessage)
      ->sms_message('DO NOT DISCLOSE. Your Capital X OTP code for phone number confirmation is ' . $this->otp . '.')
      ->to($app_user->phone);
  }
}
