<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='image';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
