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
}
