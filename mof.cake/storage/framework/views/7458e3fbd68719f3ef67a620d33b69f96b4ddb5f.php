<?php $__env->startSection('content'); ?>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="<?php echo e(url('admin/info')); ?>">莫夫--莫夫作品</a> &raquo; 莫夫作品分类
    </div>
    <!--面包屑导航 结束-->

    <div class="result_wrap">
        <form action="<?php echo e(url('admin/mof_design/design')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="add_tab">
                <tbody>
                <tr>
                    <th>ID：</th>
                    <td>
                        <input type="text" class="sm" name="id">
                    </td>
                </tr>
                <tr>
                    <th>分类ID：</th>
                    <td>
                        <input type="text" class="sm" name="cate">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <input type="text" class="sm" name="describe">
                    </td>
                </tr>
                <tr>
                    <th>缩略图：</th>
                    <td>
                        <input type="text" size="50" name="image">
                        <input id="file_upload" name="file_upload" type="file" multiple="true">
                        <script src="<?php echo e(asset('resources/org/uploadify/jquery.uploadify.min.js')); ?>" type="text/javascript"></script>
                        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('resources/org/uploadify/uploadify.css')); ?>">
                        <script type="text/javascript">
                            <?php $timestamp = time();?>
                            $(function() {
                                $('#file_upload').uploadify({
                                    'buttonText' : '图片上传',
                                    'formData'     : {
                                        'timestamp' : '<?php echo $timestamp;?>',
                                        '_token'     : "<?php echo e(csrf_token()); ?>"
                                    },
                                    'swf'      : "<?php echo e(asset('resources/org/uploadify/uploadify.swf')); ?>",
                                    'uploader' : "<?php echo e(url('admin/upload')); ?>",
                                    'onUploadSuccess' : function(file, data, response) {
                                        $('input[name=image]').val(data);//地址
                                        $('#art_thumb_img').attr('src','/'+data);//追加图片
//                                    alert(data);
                                    }
                                });
                            });
                        </script>
                        <style>
                            .uploadify{display:inline-block;}
                            .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                            table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                        </style>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <img src="" alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>