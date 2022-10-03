<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ["username","firstName","lastName","email"];
    protected $hidden = ["password", "remember_token"];
    public $table = "customers";
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function address(){
        return $this->hasOne(Address::class);
    }
    use HasFactory;
}
