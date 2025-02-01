<?php

namespace App\Services;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserService extends BaseService
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function chargeWallet($request, $user)
    {

        $user =  User::where('id', $user)->first();

        //dd($user);
        $user->update([
            'wallet' => $user->wallet + $request->amount
        ]);
        return $user;
    }

    public function me()
    {

        $user =  User::with('donations')->findOrFail(Auth::user()->id);

        return $user;
    }

    public function notification()
    {

        return Notification::where('user_id', Auth::user()->id)->get();
    }
}
