<?php
namespace App\Http\Controllers\Home;

use App\Http\Model\Footer;
use App\Http\Model\Middle;

class IndexController extends CommonController
{
    public function index()
    {
        $middle=Middle::orderBy('middle_id','desc')->get();
        $footer=Footer::orderBy('footer_id','desc')->get();
        return view('home.index',compact('middle','footer'));
    }
}