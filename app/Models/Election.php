<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'date',
      'sieges_totaux',
      'sieges_obtenus',
      'participation',
      'nb_votant',
      'nb_electeur',
      'promotion_id',
  ];

  protected $table = 'elections';

  public function promotion()
  {
    return $this->hasOne('App\Models\Promotion','id','promotion_id');
  }

}
