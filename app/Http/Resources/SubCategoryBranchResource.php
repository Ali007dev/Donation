<?php

namespace App\Http\Resources;

use App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryBranchResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sub_category_id' => $this->sub_category_id,
            'description' => $this->description,
            'paid_amount' => $this->paid_amount,
            'needed_amount' => $this->needed_amount,
            'percentage' => $this->percentage,

            'donations' => UserDonationResource::collection($this->whenLoaded('donations')),

        ];
    }
}
