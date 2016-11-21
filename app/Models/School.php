<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name',
      'type',
      'street',
      'city',

  ];
  protected $table = 'schools';

  // public function promotions(){
  //   return $this->hasMany('App\Models\Promotion');
  // }
}
