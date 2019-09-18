<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  //
//  use SoftDeletes;

  protected $table = "students";

  protected $primaryKey = 'id';

  protected $fillable = ['name', 'status'];

  protected $dates = ['deleted_at'];

  public function meals()
  {
    return $this->hasMany('App\Meal');
  }

}
