<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use App\Traits\Filterable;

class UserDonation extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'user_id',
        'sub_category_id',
        'amount',
        'type',
        'date',
    ];

    protected $filterable = [
        '',
    ];

    public $targetWith =[
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function donatable() {
        return $this->morphTo();
    }

}
