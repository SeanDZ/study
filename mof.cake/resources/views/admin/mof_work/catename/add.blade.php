@extends('layouts.admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">莫夫--莫夫作品</a> &raquo; 莫夫作品分类
    </div>
    <!--面包屑导航 结束-->

    <div class="result_wrap">
        <form action="{{url('admin/mof_work/catename')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>ID：</th>
                    <td>
                        <input type="text" class="sm" name="id">
                    </td>
                </tr>
                <tr>
                    <th>分类名称：</th>
                    <td>
                        <input type="text" class="sm" name="name">
                    </td>
                </tr>
                <tr>
                    <th>分类标题：</th>
                    <td>
                        <input type="text" class="sm" name="title">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection
