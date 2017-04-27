<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function kawasan_hutan()
    {
        return $this->hasMany(Kawasan_hutan::class);
    }

    public function lahan_vegetasi()
    {
        return $this->hasMany(Lahan_vegetasi::class);
    }

    public function sebaran_kawasan()
    {
        return $this->hasMany(Sebaran_kawasan::class);
    }

    public function penataan_batas()
    {
        return $this->hasMany(Penataan_batas::class);
    }

    public function data()
    {
        return $this->hasOne(Data::class);
    }
}
