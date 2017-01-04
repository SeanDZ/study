<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
class Middle extends Model
{
    protected $table='middle';
    protected $primaryKey='middle_id';
    public $timestamps=true;
    protected $guarded=[];
}

