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
        'price',
        'img',
        'desc',



    ];




    public  function user(){
      return  $this->belongsTo(User::class );
    }



    public function category(){
      return  $this->belongsTo(Category::class,'category_id');
    }
}
