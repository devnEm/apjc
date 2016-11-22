<?php

namespace App\Models;

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

  public function promotion()
    {
        return $this->belongsTo('App\Models\Promotion');
    }

}
