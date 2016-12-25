<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table='student';
    public $timestamps=true;
    protected $guarded=[];
    protected function getDateFormat()
    {
        return time();
    }
    protected function asDateTime($value)
    {
        return $value;
    }
}