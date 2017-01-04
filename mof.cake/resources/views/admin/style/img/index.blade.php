@extends('layouts.admin')
@section('content')
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo;首页图标
</div>
<!--<div class="result_content">-->
<!--<div class="short_wrap">-->
<!--<a href="#" id="add"><i class="fa fa-plus"></i>添加图标</a>-->
<!--</div>-->
<!--</div>-->

<div class="result_wrap">
    <div class="result_content">
        <table class="list_tab">
            <tr>
                <!--<th class="tc" width="5%"><input type="checkbox" name=""></th>-->
                <th class="tc">ID</th>
                <th class="tc">名称</th>
                <th>图片</th>
                <th>操作</th>
            </tr>
            <tr class="img_lst">
                <td class="tc">1</td>
                <td style="align-content: center">莫夫</td>
                <td><img style="width:150px" src="../style/img/1.jpg" alt=""></td>
                <td>
                    <a href="edit.html">编辑</a>
                    <a href="#">删除</a>
                </td>
            </tr>
            <tr class="img_lst">
                <td class="tc">2</td>
                <td style="align-content: center">烘焙教室</td>
                <td><img style="width:150px" src="../style/img/1.jpg" alt=""></td>
                <td>
                    <a href="edit.html">编辑</a>
                    <a href="#">删除</a>
                </td>
            </tr>
            <tr class="img_lst">
                <td class="tc">3</td>
                <td style="align-content: center">召集令</td>
                <td><img style="width:150px" src="../style/img/1.jpg" alt=""></td>
                <td>
                    <a href="edit.html">编辑</a>
                    <a href="#">删除</a>
                </td>
            </tr>
            <tr class="img_lst">
                <td class="tc">4</td>
                <td style="align-content: center">料单</td>
                <td><img style="width:150px" src="../style/img/1.jpg" alt=""></td>
                <td>
                    <a href="edit.html">编辑</a>
                    <a href="#">删除</a>
                </td>
            </tr>
            <tr class="img_lst">
                <td class="tc">5</td>
                <td style="align-content: center">商城</td>
                <td><img style="width:150px" src="../style/img/1.jpg" alt=""></td>
                <td>
                    <a href="edit.html">编辑</a>
                    <a href="#">删除</a>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection