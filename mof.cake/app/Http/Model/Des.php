<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Des extends Model
{
    protected $table='des';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}