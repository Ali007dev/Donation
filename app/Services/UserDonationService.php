<?php

namespace App\Services;

use App\Models\SubCategory;
use App\Models\SubCategoryBranch;
use App\Models\User;
use App\Models\UserDonation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserDonationService extends BaseService
{
    public function __construct(UserDonation $model)
    {
        parent::__construct($model);
    }

    public function create($request)
    {

        $request['user_id'] = Auth::user()->id;
        $request['date'] = Carbon::now()->format('Y-m-d');
        $data = $request;

        $this->chargeSubCategory($request['amount']);
        $this->discountWallet($request['amount'], $request['user_id']);
        if (request()->sub_branch_id) {
            $result = SubCategoryBranch::findOrFail(request()->sub_branch_id);
            return  $result->donations()->create($data);
        }
        if (request()->sub_category_id) {
            $result = SubCategory::findOrFail(request()->sub_category_id);
            return $result->donations()->create($data);
        }
    }



    public function discountWallet($amount, $user)
    {
        $user = User::findOrFail($user);
        if ($user->wallet - $amount >= 0 && $user->wallet != 0) {
            $user->update([
                'wallet' => $user->wallet - $amount
            ]);

            return $user;
        }
        if ($user->wallet - $amount < 0 || $user->wallet == 0) {
            throwError(
               'you need to charge your wallet'
            );
        }
    }


    public function chargeSubCategory($amount)
    {
        if (request()->sub_branch_id) {
            $result = SubCategoryBranch::findOrFail(request()->sub_branch_id);
            $subCategory = SubCategory::findOrFail($result->sub_category_id);
            $subCategory->update([
                'paid_amount' => $subCategory->paid_amount + $amount
            ]);
        }
        if (request()->sub_category_id) {
            $subCategory = SubCategory::findOrFail(request()->sub_category_id);
            $subCategory->update([
                'paid_amount' => $subCategory->paid_amount + $amount
            ]);
        }
    }
}
