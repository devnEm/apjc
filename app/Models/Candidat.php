<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'election_id',
      'user_id',
      'elu',
      'rang'
  ];
    protected $table = 'candidats';
}
