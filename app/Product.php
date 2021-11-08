<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'table_product';
    protected $fillable = ['id_category', 'id_product_detail', 'name', 'price', 'stock', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->hasMany('App\Produk_detail');

    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
