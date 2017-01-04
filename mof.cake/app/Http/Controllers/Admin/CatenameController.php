<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Catename;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CatenameController extends CommonController
{
    //get.admin/mof_work/catename
    public function index()
    {
        $field=Catename::orderBy('id','asc')->paginate(12);
        return view('admin.mof_work.catename.index')->with('field',$field);
    }

    //get.admin/catename/create
    public function create()
    {
        return view('admin.mof_work.catename.add');
    }
    //post.admin/catename
    public function store()
    {
        $input=Input::except('_token');
        $re=Catename::create($input);
        if($re){
            return redirect('admin/mof_work/catename');
        }
    }
    //get.admin/catename/{catename}
    public function show()
    {

    }
    //get.admin/catename/{catename}/edit
    public function edit($id)
    {
        $field=Catename::find($id);
        return view('admin.mof_work.catename.edit')->with('field',$field);
    }
    //put.admin/catename/{catename}
    public function update($id)
    {
        $input=Input::except('_token','_method');
        $re=Catename::where('id',$id)->update($input);
        if($re){
            return redirect('admin/mof_work/catename');
        }else{
            return back()->with('errors','请稍后重试！');
        }
    }

    //delete.admin/catename/{catename}
    public function destroy($id)
    {
        $field=Catename::find($id);
        $re=Catename::where('id',$id)->delete();
        if($re){
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
