<?php
namespace App\Http\Controllers\Home;

use App\Http\Model\Image;
use App\Http\Model\Technology;
use App\Http\Model\Twelve;

class MofController extends CommonController
{
    public function index()
    {
        $image=Image::orderBy('id','desc')->take(4)->get();
        $twelve=Twelve::orderBy('id','desc')->take(12)->get();
        $technology=Technology::orderBy('id','desc')->get();
        return view('home.mof.index',compact('image','twelve','technology'));
    }
}