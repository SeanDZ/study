<?php

namespace App\Http\Controllers\Admin;
use App\Http\Model\Pro;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProController extends CommonController
{
    //get.admin/bcake_major/pro
    public function index()
    {
        $field=Pro::all();
        return view('admin.bcake_major.pro.index')->with('field',$field);
    }

    //get.admin/bcake_major/pro/create
    public function create()
    {
        return view('admin.bcake_major.pro.add');
    }
    //post.admin/bcake_major/pro
    public function store()
    {
        $input=Input::except('_token');
        $re=Pro::create($input);
        if($re){
            return redirect('admin/bcake_major/pro');
        }
    }
    //get.admin/bcake_major/pro/{id}
    public function show()
    {

    }
    //get.admin/bcake_major/pro/{id}/edit
    public function edit($id)
    {
        $field=Pro::find($id);
        return view('admin.bcake_major.pro.edit')->with('field',$field);

    }
    //put.admin/bcake_major/pro/{id}
    public function update($id)
    {
        $field=Pro::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=Pro::where('id',$id)->update($input);
        if($re){
            return redirect('admin/bcake_major/pro');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/bcake_major/pro/{id}
    public function destroy($id)
    {
        $field=Pro::find($id);
        $image=$field->image;
        $rel=unlink($image);
        $re=Pro::where('id',$id)->delete();
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
