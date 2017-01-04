<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Tech;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class TechController extends CommonController
{
    //get.admin/mof_tech/tech
    public function index()
    {
        $field=Tech::all();
        return view('admin.mof_tech.tech.index')->with('field',$field);
    }

    //get.admin/mof_tech/tech/create
    public function create()
    {
        return view('admin.mof_tech.tech.add');
    }
    //post.admin/mof_tech/tech
    public function store()
    {
        $input=Input::except('_token');
        $re=Tech::create($input);
        if($re){
            return redirect('admin/mof_tech/tech');
        }
    }

    //get.admin/mof_tech/tech/{id}
    public function show()
    {

    }
    //get.admin/mof_tech/tech/{id}/edit
    public function edit($id)
    {
        $field=Tech::find($id);
        return view('admin.mof_tech.tech.edit')->with('field',$field);

    }
    //put.admin/mof_tech/tech/{id}
    public function update($id)
    {
        $field=Tech::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=Tech::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof_tech/tech');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/mof_tech/tech/{id}
    public function destroy($id)
    {
        $field=Tech::find($id);
        $tech=$field->image;
        $rel=unlink($tech);
        $re=Tech::where('id',$id)->delete();
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
