<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use DB;

// use daimekashiya\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    // use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone','fax','address','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne('App\Models\Membership\Company');
    }

    public function permissions(){
        return DB::table('role_user')->join('permission_role','permission_role.role_id','=','role_user.role_id')->join('permissions','permission_role.permission_id','=','permissions.id')->where('role_user.user_id', $this->id)->select('permissions.name')->get();
    }

}
