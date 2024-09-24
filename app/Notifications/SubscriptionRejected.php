<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscriptionRejected extends Notification
{
    use Queueable;

    protected $subscription;

    public function __construct($subscribeResults)
    {
        $this->subscribeResults = $subscribeResults;
    }

    public function via($notifiable)
    {
        return ['mail']; // Choisissez le canal de notification (mail, database, etc.)
    }

    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //         ->subject('Souscription rejetée')
    //         ->line('Votre souscription ID: ' . $this->subscribeResults->id . ' a été rejetée.')
    //         ->action('Voir les détails', url('/subscriptions/' . $this->subscribeResults->id))
    //         ->line('Merci de votre compréhension.');
    // }

    // Ajoutez d'autres méthodes si nécessaire (toArray, etc.)
}

