<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function customer()
    {
        $this->belongsTo(Customer::class);
    }
    public function products()
    {
        $this->hasMany(Product::class);
    }
    use HasFactory;
}
