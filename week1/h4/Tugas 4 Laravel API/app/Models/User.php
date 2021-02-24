<?php

namespace App\Models;

use App\Models\Article\Article;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
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
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    // public function role() {
    //     return $this->belongsTo(Role::class);
    // }

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class);
    }

    // public function articles() {
    //     return $this->hasMany(Article::class);
    // }

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id');
    }
 
    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();
        
        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->cekUserRole($need_role)) {
                    return true;
                }
            }
        } else{
            return $this->cekUserRole($roles);
        }
        return false;
    }
    
    private function getUserRole()
    {
       return $this->role()->getResults();
    }
    
    private function cekUserRole($role)
    {
        // dd($this->have_role->name);
        return (strtolower($role)==strtolower($this->have_role->name)) ? true : false;
    }
}
