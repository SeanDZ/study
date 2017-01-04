<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Requests;

class CategoryController1 extends CommonController
{
    //get.admin/category  全部分类列表
    public function index()
    {
        $categorys = Category::all();
        return view('admin.category.index')->with('data',$categorys);
    }

    //post.admin/category  //分类实现
    public function store()
    {
        $data='';
        $arr=array();
        foreach($data as $k=>$v){
            if($v->cate_pid==0){
                $data[$k]["cate_name"]=$data[$k]["name"];
                $arr[]=$data[$k];
                foreach($data as $m=>$n){
                    if($n->cate_pid==$v->id){
                        $data[$m]["cate_name"]='┝━━━ '.$data[$m]["name"];//自定义name在视图中加┝
                        $arr[]=$data[$m];
                    }
                }
            }
        }
        return $arr;
    }
    //get.admin/category/create   添加分类
    public function create()
    {

    }

    //get.admin/category/{category}  显示单个分类信息
    public function show()
    {

    }

    //delete.admin/category/{category}   删除单个分类
    public function destroy()
    {

    }

    //put.admin/category/{category}    更新分类
    public function update()
    {

    }

    //get.admin/category/{category}/edit  编辑分类
    public function edit()
    {

    }

}
