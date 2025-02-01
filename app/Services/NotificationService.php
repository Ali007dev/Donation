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

    public function sendNotification( $user, $amount)
{
    $employees = User::where('role', 'employee')->get();

    $user = User::find($user);

    if ($user) {
        $data = [];

        $data[] = [
            'user_id' => $user->id,
            'content' => "You have performed a donation of {$amount}.",
            'created_at' => now(),
            'updated_at' => now(),
        ];

        foreach ($employees as $employee) {
            $data[] = [
                'user_id' => $employee->id,
                'content' => "{$user->name} has donated {$amount}.",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Notification::insert($data);
    }
}

}
