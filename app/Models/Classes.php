<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'type',
      'effectif',
      'professor_title',
      'professor_name',
      'professor_firstname',
  ];

  protected $table = 'classes';
  
}
