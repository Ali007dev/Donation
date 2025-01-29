<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use App\Traits\Filterable;

class SubCategoryBranch extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
        'description',
        'sub_category_id'
    ];

    protected $filterable = [
        '',
    ];

    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }

    public function donations() {
        return $this->morphMany(UserDonation::class, 'donatable');
    }
}
