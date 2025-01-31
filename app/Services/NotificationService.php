<?php

namespace App\Services;

use App\Jobs\SendNotificationJob;
use App\Models\FileGroup;
use App\Models\Group;
use App\Models\Notification;
use App\Models\User;
use App\Models\UserGroup;

class NotificationService
{

    public function sendNotification($operation, $user)
    { {
            $user = User::findOrFail( $user);

            $data = [];
                $data[] = [
                    'user_id' => $user->id,
                    'content' => "{$user->name} has performed {$operation} .",
                    'created_at' => now(),
                    'updated_at' => now(),
                ];


            Notification::insert($data);
        }
    }
}
