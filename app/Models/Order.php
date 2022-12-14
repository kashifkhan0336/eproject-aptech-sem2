<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["delivery_type", "status", "order_number", "ordered_on", "customer_id", "product_id"];
    use HasFactory;

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        self::creating(function ($model){
            $model->order_number =$model->product_id . $model->delivery_type . fake()->randomNumber(8);
        });
    }

}
