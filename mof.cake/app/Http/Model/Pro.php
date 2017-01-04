<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    protected $table='pro';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
