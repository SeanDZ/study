<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Image;
use Illuminate\Support\Facades\Input;

class ImageController extends CommonController
{
    //get.admin/mof/image
    public function index()
    {
        $field=Image::all();
        return view('admin.mof.image.index')->with('field',$field);
    }
    //get.admin/mof/image/create
    public function create()
    {
        return view('admin.mof.image.add');
    }
    //post.admin/mof/image
    public function store()
    {
        $input=Input::except('_token');
        $re=Image::create($input);
        if($re){
            return redirect('admin/mof/image');
        }
    }
    //get.admin/mof/image/{image}
    public function show()
    {

    }
    //get.admin/mof/image/{image}/edit
    public function edit($id)
    {
        $field=Image::find($id);
        return view('admin.mof.image.edit')->with('field',$field);
    }
    //put.admin/mof/image/{image}
    public function update($id)
        {
        $field=Image::find($id);
        $img=$field->imgs;
        $input=Input::except('_token','_method');
        $img1=$input['imgs'];
        if($img!==$img1)
        unlink($img);
        $re=Image::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof/image');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }

    //delete.admin/mof/image/{image}
    public function destroy($id)
    {
        $field=Image::find($id);
        $img=$field->imgs;
        $rel=unlink($img);
        $re=Image::where('id',$id)->delete();
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
