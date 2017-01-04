<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table='work';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
