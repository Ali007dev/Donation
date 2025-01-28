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


    public function chargeWallet(Request $request){
     return app(UserService::class)->chargeWallet($request);
      }
}
