<?php

namespace FederalSt\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Notificaruser extends Notification {

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $my_notification;

    public function __construct($msg) {
        $this->my_notification = $msg;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        return (new MailMessage)
                        ->line('The introduction to the notification.')
                        ->action('Notification Action', url('/'))
                        ->line('Thank you for using our application!');
    }

    public function novoveiculo($notifiable) {
        return (new MailMessage)
                        ->line('Um veiculo ' . $this->my_notification . ' foi cadastrado em sua conta.');
    }

    public function veiculomodificado($notifiable) {
        return (new MailMessage)
                        ->line('Seu veiculo ' . $this->my_notification . ' foi modificado em sua conta.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable) {
        return [
//
        ];
    }

}
