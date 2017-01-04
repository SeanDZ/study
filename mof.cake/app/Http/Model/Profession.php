<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table='profession';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
