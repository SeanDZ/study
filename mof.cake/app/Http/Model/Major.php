<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table='major';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
