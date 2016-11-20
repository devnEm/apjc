<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School-millesime extends Model
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

  ];
  protected $table = 'promotions';
}
