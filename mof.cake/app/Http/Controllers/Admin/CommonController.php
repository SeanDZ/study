<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    //图片上传
    public function upload()
    {
        //file方法  Filedata->upoloadify
        $file = Input::file('Filedata');
        if($file -> isValid()){
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            $date=date('Ymd');
            $path = $file -> move(base_path().'/uploads'.'/'.$date,$newName);
            $filepath = 'uploads/'.$date.'/'.$newName;
            return $filepath;
        }
    }

}
