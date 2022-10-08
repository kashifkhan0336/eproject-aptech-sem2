<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = ["username","firstName","lastName","email","password"];
    protected $hidden = ["password", "remember_token"];
    public $table = "customers";
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function address(){
        return $this->hasOne(Address::class);
    }

    public function cart(){
        return $this->hasOne(Cart::class);
    }
    use HasFactory;
}
