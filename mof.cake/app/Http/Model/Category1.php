<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    protected $table='category';
    protected $primaryKey='cate_id';
    public $timestamps=false;
}
