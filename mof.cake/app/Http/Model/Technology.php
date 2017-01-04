<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table='technology';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
