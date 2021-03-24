<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addProduct extends Model
{
    use HasFactory;
    protected $table ='addproducts';

    protected $fillable=['name','price','category','user_id','description','image','quantity'];
}
