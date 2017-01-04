<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\School;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class SchoolController extends CommonController
{
    //get.admin/bcake/school
    public function index()
    {
        $field=School::all();
        return view('admin.bcake.school.index')->with('field',$field);
    }

    //get.admin/bcake/school/create
    public function create()
    {
        return view('admin.bcake.school.add');
    }
    //post.admin/bcake/school
    public function store()
    {
        $input=Input::except('_token');
        $re=School::create($input);
        if($re){
            return redirect('admin/bcake/school');
        }
    }
    //get.admin/bcake/school/{id}
    public function show()
    {

    }
    //get.admin/bcake/school/{id}/edit
    public function edit($id)
    {
        $field=School::find($id);
        return view('admin.bcake.school.edit')->with('field',$field);

    }
    //put.admin/bcake/school/{id}
    public function update($id)
    {
        $field=School::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=School::where('id',$id)->update($input);
        if($re){
            return redirect('admin/bcake/school');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/bcake/school/{id}
    public function destroy($id)
    {
        $field=School::find($id);
        $image=$field->image;
        $rel=unlink($image);
        $re=School::where('id',$id)->delete();
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
