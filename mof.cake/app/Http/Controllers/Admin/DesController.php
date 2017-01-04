<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Des;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class DesController extends CommonController
{
    //get.admin/mof_des/des
    public function index()
    {
        $field=Des::orderBy('cate','asc')->paginate(6);
        return view('admin.mof_design.des.index')->with('field',$field);
    }

    //get.admin/mof_des/des/create
    public function create()
    {
        return view('admin.mof_design.des.add');
    }
    //post.admin/mof_des/des
    public function store()
    {
        $input=Input::except('_token');
        $re=Des::create($input);
        if($re){
            return redirect('admin/mof_design/des');
        }
    }

    //get.admin/mof_des/des/{id}
    public function show()
    {

    }
    //get.admin/mof_des/des/{id}/edit
    public function edit($id)
    {
        $field=Des::find($id);
        return view('admin.mof_design.des.edit')->with('field',$field);

    }
    //put.admin/mof_des/des/{id}
    public function update($id)
    {
        $field=Des::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=des::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof_design/des');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/mof_des/des/{id}
    public function destroy($id)
    {
        $field=Des::find($id);
        $des=$field->image;
        $rel=unlink($des);
        $re=Des::where('id',$id)->delete();
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
