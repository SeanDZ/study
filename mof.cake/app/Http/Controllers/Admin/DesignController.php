<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Design;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class DesignController extends CommonController
{
    //get.admin/mof_design/design
    public function index()
    {
        $field=Design::orderBy('cate','asc')->paginate(6);
        return view('admin.mof_design.design.index')->with('field',$field);
    }

    //get.admin/mof_design/design/create
    public function create()
    {
        return view('admin.mof_design.design.add');
    }
    //post.admin/mof_design/design
    public function store()
    {
        $input=Input::except('_token');
        $re=Design::create($input);
        if($re){
            return redirect('admin/mof_design/design');
        }
    }

    //get.admin/mof_design/design/{id}
    public function show()
    {

    }
    //get.admin/mof_design/design/{id}/edit
    public function edit($id)
    {
        $field=Design::find($id);
        return view('admin.mof_design.design.edit')->with('field',$field);

    }
    //put.admin/mof_design/design/{id}
    public function update($id)
    {
        $field=Design::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=design::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof_design/design');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/mof_design/design/{id}
    public function destroy($id)
    {
        $field=Design::find($id);
        $design=$field->image;
        $rel=unlink($design);
        $re=Design::where('id',$id)->delete();
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
