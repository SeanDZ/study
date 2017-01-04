<?php
namespace App\Http\Controllers\Home;
use App\Http\Model\Category;
use App\Http\Model\Catename;
use App\Http\Model\Work;

class WorkController extends CommonController
{
    public function work()
    {
        $work=Work::all();
        $catename1=Catename::where('name','节日蛋糕')->get();
        $catename2=Catename::where('name','口味蛋糕')->get();
        $catename3=Catename::where('name','造型蛋糕')->get();
        $catename4=Catename::where('name','艺术蛋糕')->get();
        $catename5=Catename::where('name','面包')->get();
        $catename6=Catename::where('name','甜点')->get();
        $category1=Category::where('title','春节')->get();
        $category2=Category::where('title','情人节')->get();
        return view('home.mof.work',compact('work','catename1','catename2',
            'catename3','catename4','catename5','catename6',
            'category1','category2','category3','category4'));
    }
}