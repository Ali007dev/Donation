<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseCRUDController;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Services\FileLogService;
use App\Services\UserService;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request ;

class UserController extends BaseCRUDController
{
    public function __construct(UserService $service) {
        parent::__construct(
            $service,
            CreateUserRequest::class,
            UpdateUserRequest::class,
            UserResource::class
        );
    }


    public function chargeWallet(Request $request,$user){
     return app(UserService::class)->chargeWallet($request,$user);
      }

      public function me(){

        $user = app(UserService::class)->me();

        return $this->success($user);
      }

      public function notification(){

        $user = app(UserService::class)->notification();

        return $this->success($user);
      }
}
