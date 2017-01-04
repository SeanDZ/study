<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Work;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class WorkController extends CommonController
{
    //get.admin/work
    public function index()
    {
        $field=Work::all();
        return view('admin.mof_work.work.index')->with('field',$field);
    }
    //get.admin/work/create
    public function create()
    {
        return view('admin.mof_work.work.add');
    }
    //post.admin/work
    public function store()
    {
        $input=Input::except('_token');
        $re=Work::create($input);
        if($re){
            return redirect('admin/mof_work/work');
        }
    }
    //get.admin/work/{work}
    public function show()
    {
    }
    //get.admin/mof_work/work/{work}/edit
    public function edit($id)
    {
        $field=Work::find($id);
        return view('admin.mof_work.work.edit')->with('field',$field);
    }
    //put.admin/work/{work}
    public function update($id)
    {
        $field=Work::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        $re=Work::where('id',$id)->update($input);
        if($image!==$image1){
            unlink($image);
        }
        if($re){
            return redirect('admin/mof_work/work');
        }else{
            return back()->with('error','请稍后重试！');
        }
    }
    //delete.admin/work/{work}
    public function destroy($id)
    {
        $field=Work::find($id);
        $image=$field->image;
        $rel=unlink($image);
        $re=Work::where('id',$id)->delete();
        if($rel && $re){
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
