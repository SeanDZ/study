<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Footer;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class FooterController extends CommonController
{
    //get.admin/footer
    public function index()
    {
        $field = Footer::orderBy('footer_id','asc')->get();
        return view('admin.footer.index')->with('field',$field);
    }
    //get.admin/footer/create   添加页面
    public function create()
    {
        return view('admin.footer.add');
    }
    //post.admin/footer 添加提交
    public function store()
    {
        $input=Input::except('_token');
        $re=Footer::create($input);
        if($re){
            return redirect('admin/footer');
        }
    }
    //get.admin/footer/{footer}  显示
    public function show()
    {

    }
    //get.admin/footer/{footer}/edit  编辑图标
    public function edit($footer_id)
    {
        $field=Footer::find($footer_id);
        return view('admin.footer.edit',compact('field'));
    }
    //put.admin/footer/{footer_id}    更新编辑
    public function update($footer_id)
    {
        $field=Footer::find($footer_id);
        $img=$field->footer_img;
        $input=Input::except('_token','_method');
        $img1=$input['footer_img'];
        if($img!==$img1)
            unlink($img);
        $re=Footer::where('footer_id',$footer_id)->update($input);
        if($re){
            return redirect('admin/footer');
        }else{
            return back()->with('errors','稍后请重试!');
        }
    }
    //delete.admin/footer/{footer_id}   删除
    public function destroy($footer_id)
    {
        $field = Footer::find($footer_id);
        $img = $field->footer_img;
        $rel=unlink($img);
        $re=Footer::where('footer_id',$footer_id)->delete();
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
