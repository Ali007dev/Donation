<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use App\Traits\Filterable;

class SubCategory extends Model
{
    use HasFactory;
    use Filterable;
    protected $appends = [
        'percentage'
    ];
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'needed_amount',
        'paid_amount',
        'status',
        'date'
    ];

    protected $filterable = [
        '',
    ];

    public function getPercentageAttribute()
    {
        if ($this->needed_amount == 0) {
            return 0;  
        }
        return ($this->paid_amount / $this->needed_amount) * 100;
    }
}
