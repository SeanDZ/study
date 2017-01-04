<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
class Footer extends Model
{
    protected $table='footer';
    protected $primaryKey='footer_id';
//    protected $fillable=['footer_id','footer_title','footer_img'];
    public $timestamps=false;
    protected $guarded=[];
}
