<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use SmartCrowd\Rbac\Traits\AllowedTrait;
use SmartCrowd\Rbac\Contracts\Assignable;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract, Assignable
{
    use AllowedTrait;
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * Должен вернуть массив прав и ролей, назначенных пользователю
     *
     * @return array Массив назначенных прав и ролей
     */
    public function getAssignments()
    {
        return [$this->role];
    }

    public function getAllInterwes(){
        return$interwes = $this->find(1)->interviews;
        //return$this->where(['id'=>\Auth::id()])->get();
    }

    // для выборки интерьвю пользователЯ
    public function interviews(){
        return $this->hasMany('App\Interview');
    }
}
