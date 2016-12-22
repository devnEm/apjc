<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'titre',
      'name',
      'first_name',
      'email',
      'phone',
      'hidden_phone',
      'email_subscription',
      'subscribed'
  ];

  protected $table = 'adherents';

  public function bureau()
  {
    return $this->belongsTo('App\Models\Bureau','id','adherent_id');
  }
  public function user()
  {
    return $this->belongsTo('App\Models\User','id','adherent_id');
  }
}
