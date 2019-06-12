<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name','body','price','sales','picture','user_id','catalog_id','status'];
}
