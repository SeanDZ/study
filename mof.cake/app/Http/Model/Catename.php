<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Catename extends Model
{
    protected $table='catename';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $guarded=[];
}

