<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $table='design';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
