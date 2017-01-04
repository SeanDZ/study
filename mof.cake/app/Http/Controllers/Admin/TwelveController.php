<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Twelve;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class TwelveController extends CommonController
{
    //get.admin/mof/twelve
    public function index()
    {
        $field=Twelve::all();
        return view('admin.mof.twelve.index')->with('field',$field);
    }

    //get.admin/mof/twelve/create
    public function create()
    {
        return view('admin.mof.twelve.add');
    }
    //post.admin/mof/twelve
    public function store()
    {
        $input=Input::except('_token');
        $re=Twelve::create($input);
        if($re){
            return redirect('admin/mof/twelve');
        }
    }

    //get.admin/mof/twelve/{twelve}
    public function show()
    {

    }
    //get.admin/mof/twelve/{twelve}/edit
    public function edit($id)
    {
        $field=Twelve::find($id);
        return view('admin.mof.twelve.edit')->with('field',$field);

    }
    //put.admin/mof/twelve/{twelve}
    public function update($id)
    {
        $field=Twelve::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        //        dd($input);
        $image1=$input['image'];
        if($image!==$image1)
        unlink($image);
        $re=Twelve::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof/twelve');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/mof/twelve/{twelve}
    public function destroy($id)
    {
        $field=Twelve::find($id);
        $twelve=$field->image;
        $rel=unlink($twelve);
        $re=Twelve::where('id',$id)->delete();
        if($re && $rel){
            $data=[
                'status'=>0,
                'msg'=>'删除成功！',
            ];
        }else{
            $data=[
                'status'=>1,
                'msg'=>'删除失败！',
            ];
        }
        return $data;
    }
}
