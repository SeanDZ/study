@extends('layouts.admin')
@section('content')
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo;首页图标
</div>
<div class="result_content">
<div class="short_wrap">
<a href="{{url('admin/footer/create')}}" style="width: 120px;height: 45px;background: #eee;display: block;text-align: center;padding-top: 15px;font-size: 20px">添加图标</a>
</div>
</div>
<div class="result_wrap">
    <div class="result_content">
        <table class="list_tab">
            <tr>
                <!--<th class="tc" width="5%"><input type="checkbox" name=""></th>-->
                <th class="tc">ID</th>
                <th class="tc">名称</th>
                <th style="text-align: center">图片</th>
                <th>操作</th>
            </tr>
            @foreach($field as $v)
            <tr class="img_lst">
                <td class="tc">{{$v->footer_id}}</td>
                <td style="text-align: center">{{$v->footer_title}}</td>
                <td><img style="width:150px;height: 85px" src="/{{$v->footer_img}}" alt=""></td>
                <td>
                    <a href="{{url('admin/footer/'.$v->footer_id.'/edit')}}">编辑</a>
                    <a href="javascript:;" onclick="del({{$v->footer_id}})">删除</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
    //删除分类
    function del(footer_id) {
        layer.confirm('Are you sure?', {
            btn: ['Yes','No'] //按钮
        }, function(){
            $.post("{{url('admin/footer/')}}/"+footer_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status==0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
//            layer.msg('的确很重要', {icon: 1});
        }, function(){

        });
    }
</script>
@endsection