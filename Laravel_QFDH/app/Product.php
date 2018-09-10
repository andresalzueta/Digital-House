<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected   $table = 'products';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /** 
     * 
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description', 'price', 'active', 'image', 'product_id', 'brand_id', 'category_id'];
    protected $guarded = ['id','created_at','updated_at'];

    public function brand() {
        return $this->hasOne(Brand::class,'id','brand_id');
    }

    public function brands() {
        return Brand::all();
    }

    public function category() {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function categories() {
        return Category::all();
    }
}
