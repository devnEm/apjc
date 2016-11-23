<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentElu extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'promotion_id',
      'titre',
      'name',
      'first_name',
      'email',
      'nb_electeur',
      'phone',
      'user_id',
      'candidat',
      'elu',
      'suppleant',
      'rang',
      'hidden_phone',
      'email_subscription'
  ];
    protected $table = 'parent_elus';
}
$table->integer('promotion_id')->unsigned();
$table->string('titre');
$table->string('name');
$table->string('first_name');
$table->string('email');
$table->string('phone');
$table->integer('user_id')->unsigned();
$table->boolean('candidat');
$table->boolean('elu');
$table->boolean('suppleant');
$table->integer('rang');
