<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Course;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CourseController extends CommonController
{
    //get.admin/bcake/course
    public function index()
    {
        $field=Course::all();
        return view('admin.bcake.course.index')->with('field',$field);
    }
    //get.admin/bcake/course/create
    public function create()
    {
        return view('admin.bcake.course.add');
    }
    //post.admin/bcake/course
    public function store()
    {
        $input=Input::except('_token');
        $re=Course::create($input);
        if($re){
            return redirect('admin/bcake/course');
        }
    }
    //get.admin/bcake/course/{id}
    public function show()
    {

    }
    //get.admin/bcake/course/{id}/edit
    public function edit($id)
    {
        $field=Course::find($id);
        return view('admin.bcake.course.edit')->with('field',$field);

    }
    //put.admin/bcake/course/{id}
    public function update($id)
    {
        $field=Course::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=Course::where('id',$id)->update($input);
        if($re){
            return redirect('admin/bcake/course');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/bcake/course/{id}
    public function destroy($id)
    {
        $field=Course::find($id);
        $tech=$field->image;
        $rel=unlink($tech);
        $re=Course::where('id',$id)->delete();
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
