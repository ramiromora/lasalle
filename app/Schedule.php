<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    //use SoftDeletes, CascadeSoftDeletes;

    protected $table = "schedules";

    protected $primaryKey = 'id';

    protected $fillable = ['date', 'description', 'start', 'finish'];

    protected $dates = ['deleted_at'];

}