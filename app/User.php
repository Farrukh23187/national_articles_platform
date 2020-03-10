<?php
namespace App;

// use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Company;
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password', 'phone', 'company_id', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function isAdmin()
    {
        return $this->roles()->first()->name == 'admin';
    }

    public function isUser()
    {
        return $this->roles()->first()->name == 'user';
    }

    public function isExpert()
    {
        return $this->roles()->first()->name == 'expert';
    }

    public function isStaff()
    {
        return $this->roles()->first()->name == 'staff';
    }

}
