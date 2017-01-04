<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Technology;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class TechnologyController extends CommonController
{
    //get.admin/mof/technology
    public function index()
    {
        $field=Technology::all();
        return view('admin.mof.technology.index')->with('field',$field);
    }
    //get.admin/technology/create   
    public function create()
    {
        return view('admin.mof.technology.add');
    }
    //post.admin/technology
    public function store()
    {
        $input=Input::except('_token');
        $re=Technology::create($input);
        if($re){
            return redirect('admin/mof/technology');
        }
    }
    //get.admin/technology/{technology}  
    public function show()
    {

    }
    //get.admin/technology/{technology}/edit
    public function edit($id)
    {
        $field=Technology::find($id);
        return view('admin.mof.technology.edit')->with('field',$field);
    }
    //put.admin/technology/{technology}
    public function update($id)
    {
        $field=Technology::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
        unlink($image);
        $re=Technology::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof/technology');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/technology/{technology}  
    public function destroy($id)
    {
        $field=Technology::find($id);
        $technology=$field->image;
        if($technology)
            unlink($technology);
        $re=Technology::where('id',$id)->delete();
        if($re){
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
