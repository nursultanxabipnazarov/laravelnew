<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
         'price',
          'user_id', 
          'category_id'
    ];




    public  function user(){
        $this->belongsTo(User::class);
    }



    public function category(){
        $this->belongsTo(Category::class);
    }
}