<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactsNotify extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    private $name_data;
    private $email_data;
    private $subject_data;
    private $message_data;
    private $status_data;
    public function __construct($name , $email , $subject, $message, $status)
    {
        $this->name_data = $name;
        $this->email_data = $email;
        $this->subject_data = $subject;
        $this->message_data = $message;
        $this->status_data = $status;
    }

    // /**
    //  * Get the notification's delivery channels.
    //  *
    //  * @return array<int, string>
    //  */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    // /**
    //  * Get the mail representation of the notification.
    //  */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    // /**
    //  * Get the array representation of the notification.
    //  *
    //  * @return array<string, mixed>
    //  */
    public function toArray(object $notifiable): array
    {
        return [
            'name' => $this->name_data,
            'email' => $this->email_data,
            'subject' => $this->subject_data,
            'message' => $this->message_data,
            'status' => $this->status_data,
        ];
    }
}
