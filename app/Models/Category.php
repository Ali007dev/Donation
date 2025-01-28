<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use App\Traits\Filterable;

class Category extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
    ];

    public $targetWith = [
        'subCategory',
    ];

    protected $filterable = [
        '',
    ];

    public function subCategory(){
        return $this->hasMany(SubCategory::class,'category_id');
    }
}
