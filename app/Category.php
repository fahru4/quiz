<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'table_category';

    protected $fillable = ['nama_category', 'created_at', 'updated_at'];
    
}
