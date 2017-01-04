@extends('layouts.admin')
@section('content')
    <div class="result_wrap">
        <form action="{{url('admin/mof_work/catename/'.$field->id)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>ID：</th>
                    <td>
                        <input type="text" class="sm" name="id" value="{{$field->id}}">
                    </td>
                </tr>

                <tr>
                    <th>分类名称：</th>
                    <td>
                        <input type="text" class="sm" name="name" value="{{$field->name}}">
                    </td>
                </tr>
                <tr>
                    <th>分类标题：</th>
                    <td>
                        <input type="text" class="sm" name="title" value="{{$field->title}}">
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
