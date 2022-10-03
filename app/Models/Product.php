<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','desc','price','product_code', 'product_number','category_id'];
    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function getCategory(){
        return $this->name;
    }
    public $table = "products";
}
