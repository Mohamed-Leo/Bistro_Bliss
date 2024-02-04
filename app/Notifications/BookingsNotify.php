<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingsNotify extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    private $date_data;
    private $time_data;
    private $name_data;
    private $email_data;
    private $phone_data;
    private $person_data;
    private $status_data;
    public function __construct($date , $time , $name , $email , $phone , $person , $status)
    {
        $this->date_data = $date;
        $this->time_data = $time;
        $this->name_data = $name;
        $this->email_data = $email;
        $this->phone_data = $phone;
        $this->person_data = $person;
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
            'date'=>$this->date_data,
            'time'=>$this->time_data,
            'name'=>$this->name_data,
            'email'=>$this->email_data,
            'phone'=>$this->phone_data,
            'person'=>$this->person_data,
            'status' => $this->status_data
        ];
    }
}
