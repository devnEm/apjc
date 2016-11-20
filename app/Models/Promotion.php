<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'year',
      'director_title',
      'director_name',
      'director_firstname',
      'total_student_effectives',
      'nb_class',
      'current'

  ];
  protected $table = 'promotions';

  public function school()
  {
    return $this->hasOne('App\Models\School','id','school_id');
  }
}
