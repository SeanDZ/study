<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table='tech';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}
