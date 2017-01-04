<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CategoryController extends CommonController
{
    //get.admin/mof_work/category
    public function index()
    {
        $field=Category::orderBy('cate_pid','asc')->paginate(5);
        return view('admin.mof_work.category.index')->with('field',$field);
    }

    //get.admin/category/create
    public function create()
    {
        return view('admin.mof_work.category.add');
    }
    //post.admin/category
    public function store()
    {
        $input=Input::except('_token');
        $re=Category::create($input);
        if($re){
            return redirect('admin/mof_work/category');
        }
    }
    //get.admin/category/{category}
    public function show()
    {

    }
    //get.admin/category/{category}/edit
    public function edit($id)
    {
        $field=Category::find($id);
        return view('admin.mof_work.category.edit')->with('field',$field);
    }
    //put.admin/category/{category}
    public function update($id)
    {
        $field=Category::find($id);
        $image=$field->image;
        $input=Input::except('_token','_method');
        $image1=$input['image'];
        if($image !== $image1){
            unlink($image);
        }
        $re=Category::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof_work/category');
        }else{
            return back()->with('errors','请稍后重试！');
        }
    }

    //delete.admin/category/{category}
    public function destroy($id)
    {
        $field=Category::find($id);
        $image=$field->image;
        $rel=unlink($image);
        $re=Category::where('id',$id)->delete();
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
