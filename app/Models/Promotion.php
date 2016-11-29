<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

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
      'current'

  ];
  protected $table = 'promotions';

  public function school()
  {
    return $this->hasOne('App\Models\School','id','school_id');
  }

  public function classes()
  {
    return $this->hasMany('App\Models\Classes');
  }

  public function councils()
  {
    return $this->hasMany('App\Models\Council');
  }

  public function election()
  {
      return $this->belongsTo('App\Models\Election','id','promotion_id');
  }

  public function effectif($id)
  {
    $effectif = DB::table('classes')->where('promotion_id',$id)->sum('effectif');
    return $effectif;
  }
}
