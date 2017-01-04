<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Major;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class MajorController extends CommonController
{
    //get.admin/bcake_major/major
    public function index()
    {
        $field=Major::all();
        return view('admin.bcake_major.major.index')->with('field',$field);
    }

    //get.admin/bcake_major/major/create
    public function create()
    {
        return view('admin.bcake_major.major.add');
    }
    //post.admin/bcake_major/major
    public function store()
    {
        $input=Input::except('_token');
        $re=Major::create($input);
        if($re){
            return redirect('admin/bcake_major/major');
        }
    }
    //get.admin/bcake_major/major/{id}
    public function show()
    {

    }
    //get.admin/bcake_major/major/{id}/edit
    public function edit($id)
    {
        $field=Major::find($id);
        return view('admin.bcake_major.major.edit')->with('field',$field);

    }
    //put.admin/bcake_major/major/{id}
    public function update($id)
    {
        $field=Major::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=Major::where('id',$id)->update($input);
        if($re){
            return redirect('admin/bcake_major/major');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/bcake_major/major/{id}
    public function destroy($id)
    {
        $field=Major::find($id);
        $image=$field->image;
        $rel=unlink($image);
        $re=Major::where('id',$id)->delete();
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
