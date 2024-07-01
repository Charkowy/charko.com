<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     */

    protected $fillable = ['title', 'description', 'price', 'state', 'brand_id', 'category_id'];

    public function priceWithTax($price){
        $price = $price * 1.21;
        return $price;
    }

	public function categories()
	{
        return $this->belongsToMany(categories::class, 'categories_products', 'product_id', 'category_id')
					->withPivot('id')
					->withTimestamps();
	}
}
