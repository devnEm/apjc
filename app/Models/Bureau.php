<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'president',
      'secretaire',
      'comptable',
      'redacteur',
      'adherent_id'

  ];

  protected $table = 'bureau';
}
