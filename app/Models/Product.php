<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id', 
        'name',
        'description',
         'price',
          
          
    ];




    public  function user(){
        $this->belongsTo(User::class ,'user_id');
    }



    public function category(){
        $this->belongsTo(Category::class,'category_id');
    }
}