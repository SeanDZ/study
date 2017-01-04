<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table='school';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
