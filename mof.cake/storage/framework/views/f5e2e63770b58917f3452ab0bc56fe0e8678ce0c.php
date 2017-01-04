<link rel="stylesheet" href="<?php echo e(asset('http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css')); ?>">
<?php $__env->startSection('content'); ?>
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">莫夫--莫夫作品</a> &raquo;莫夫作品分类
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="<?php echo e(url('admin/mof_work/catename/create')); ?>" style="width: 120px;height: 45px;background: #eee;display: block;text-align: center;padding-top: 15px;font-size: 20px">添加图片</a>
        </div>
    </div>
    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <!--<th class="tc" width="5%"><input type="checkbox" name=""></th>-->
                    <th class="tc">ID</th>
                    <th style="text-align: center">分类名称</th>
                    <th style="text-align: center">分类主题</th>
                    <th>操作</th>
                </tr>
                <?php foreach($field as $v): ?>
                    <tr class="img_lst">
                        <td class="tc"><?php echo e($v->id); ?></td>
                        <td class="tc"><?php echo e($v->name); ?></td>
                        <td class="tc"><?php echo e($v->title); ?></td>
                        <td>
                            <a href="<?php echo e(url('admin/mof_work/catename/'.$v->id.'/edit')); ?>">编辑</a>
                            <a href="javascript:;" onclick="del(<?php echo e($v->id); ?>)">删除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php echo $field->links(); ?>

    </div>
    <script>
        //删除分类
        function del(id) {
            layer.confirm('Are you sure?', {
                btn: ['Yes','No'] //按钮
            }, function(){
                $.post("<?php echo e(url('admin/mof_work/catename/')); ?>/"+id,{'_method':'delete','_token':"<?php echo e(csrf_token()); ?>"},function (data) {
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>