<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\CommonController;
use App\Http\Model\Des;
use App\Http\Model\Design;

class DesignController extends CommonController
{
    public function design()
    {
        $design1=Design::where('cate',1)->get();
        $design2=Design::where('cate',2)->get();
        $design3=Design::where('cate',3)->get();
        $des1=Des::where('cate',1)->get();
        $des2=Des::where('cate',2)->get();
        $des3=Des::where('cate',3)->get();
        return view('home.mof.design',compact('design1','design2','design3','des1','des2','des3'));
    }
}