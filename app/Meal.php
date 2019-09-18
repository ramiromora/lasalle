<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    //
  //use SoftDeletes, CascadeSoftDeletes;

  protected $table = "meals";

  protected $primaryKey = 'id';

  protected $fillable = ['eat_at', 'status','student_id','place'];

  protected $dates = ['deleted_at'];

  public function student()
  {
    return $this->belongsTo('App\Student');
  }

}
