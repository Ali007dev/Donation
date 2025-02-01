<?php

namespace App\Http\Resources;

use App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'description' => $this->description,
            'needed_amount' => $this->needed_amount,
            'paid_amount' => $this->paid_amount,
            'status' => $this->status,
            'date' => $this->date,
            'hasBranch' => $this->hasBranch,

            'percentage' => $this->percentage,
            'donations' => UserDonationResource::collection($this->whenLoaded('donations')),
            'branches' => SubCategoryBranchResource::collection($this->whenLoaded('branches')),

        ];
    }
}
