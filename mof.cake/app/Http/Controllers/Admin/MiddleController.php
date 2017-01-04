<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Middle;
use Illuminate\Support\Facades\Input;

class MiddleController extends CommonController
{
    //get.admin/middle  全部列表
    public function index()
    {
        $field = Middle::orderBy('middle_id','asc')->get();
        return view('admin.middle.index')->with('field',$field);
    }
    //get.admin/middle/create   添加页面
    public function create()
    {
        return view('admin.middle.add');
    }
    //post.admin/middle  提交添加
    public function store()
    {
        $input=Input::except('_token');
        $re=Middle::create($input);
        if($re){
            return redirect('admin/middle');
        }
    }

    //get.admin/middle/{middle}  显示
    public function show()
    {

    }
    //get.admin/middle/{middle}/edit  编辑
    public function edit($middle_id)
    {
        $field=Middle::find($middle_id);
        return view('admin.middle.edit',compact('field'));
    }
    //put.admin/middle/{middle}    更新
    public function update($middle_id)
    {
        $field=Middle::find($middle_id);
        $img=$field->middle_img;
        $input=Input::except('_token','_method');
        $img1=$input['middle_img'];
        if($img!==$img1)
            unlink($img);
        $re=Middle::where('middle_id',$middle_id)->update($input);
        if($re){
            return redirect('admin/middle');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }

    //delete.admin/middle/{middle_id}   删除
    public function destroy($middle_id)
    {
        $field=Middle::find($middle_id);
        $img=$field->middle_img;
        $rel=unlink($img);
            $re=Middle::where('middle_id',$middle_id)->delete();
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
