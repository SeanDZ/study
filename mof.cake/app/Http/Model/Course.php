<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='course';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
