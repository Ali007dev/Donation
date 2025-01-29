<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseCRUDController;
use App\Http\Requests\CreateUserDonationRequest;
use App\Http\Requests\UpdateUserDonationRequest;
use App\Http\Resources\UserDonationResource;
use App\Services\UserDonationService;

class UserDonationController extends BaseCRUDController
{
    public function __construct(UserDonationService $service) {
        parent::__construct(
            $service,
            CreateUserDonationRequest::class,
            UpdateUserDonationRequest::class,
            UserDonationResource::class
        );
    }
}
