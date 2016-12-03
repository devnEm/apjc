<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [
       'front',
       'publish',
       'title',
       'article',

   ];
   protected $table = 'posts';

   public function category()
   {
     return $this->hasOne('App\Models\Categorie','id','categorie_id');
   }

}
