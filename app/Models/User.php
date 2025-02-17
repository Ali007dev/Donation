<?php



namespace App\Models;

use App\Traits\Filterable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use Filterable;


    protected $fillable =['name','password','email','number','role','wallet','country','birthdate'];
    protected $hidden =['password'];
    protected $filterable = [
        'name',
    ];


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }





    public function donations()
    {
        return $this->hasMany(UserDonation::class, 'user_id');
    }




}

