<?php

namespace Sawirricardo\Zenziva\Laravel;

use Illuminate\Notifications\Notification;

class ZenzivaChannel
{
    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param Notification $notification
     *
     * @return mixed
     * @throws Exception
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toZenviva($notifiable);
    }
}
