<?php

namespace App\Http\Resources;

use App\Models\User;
use App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDonationResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'amount' => $this->amount,
            'type' => $this->type,
            'date' => $this->date,
            'user' => UserResource::make($this->whenLoaded('user')),

        ];
    }
}
