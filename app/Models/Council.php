<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'date',
      'url',
  ];

  protected $table = 'councils';

  public function promotion()
    {
        return $this->belongsTo('App\Models\Promotion');
    }

}
