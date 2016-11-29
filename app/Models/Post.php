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
       'attente',
       'public',
       'director_name',
       'article',

   ];

}
