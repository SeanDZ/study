<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Profession;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProfessionController extends CommonController
{
    //get.admin/bcake_major/profession
    public function index()
    {
        $field=Profession::all();
        return view('admin.bcake_major.profession.index')->with('field',$field);
    }

    //get.admin/bcake_major/profession/create
    public function create()
    {
        return view('admin.bcake_major.profession.add');
    }
    //post.admin/bcake_major/profession
    public function store()
    {
        $input=Input::except('_token');
        $re=Profession::create($input);
        if($re){
            return redirect('admin/bcake_major/profession');
        }
    }
    //get.admin/bcake_major/profession/{id}
    public function show()
    {

    }
    //get.admin/bcake_major/profession/{id}/edit
    public function edit($id)
    {
        $field=Profession::find($id);
        return view('admin.bcake_major.profession.edit')->with('field',$field);

    }
    //put.admin/bcake_major/profession/{id}
    public function update($id)
    {
        $field=Profession::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image!==$image1)
            unlink($image);
        $re=Profession::where('id',$id)->update($input);
        if($re){
            return redirect('admin/bcake_major/profession');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/bcake_major/pro/{id}
    public function destroy($id)
    {
        $field=Profession::find($id);
        $image=$field->image;
        $rel=unlink($image);
        $re=Profession::where('id',$id)->delete();
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
