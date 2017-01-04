<?php $__env->startSection('content'); ?>
    <div class="result_wrap">
        <form action="<?php echo e(url('admin/mof_design/des/'.$field->id)); ?>" method="post">
            <input type="hidden" name="_method" value="put">
            <?php echo e(csrf_field()); ?>

            <table class="add_tab">
                <tbody>
                <tr>
                    <th>ID：</th>
                    <td>
                        <input type="text" class="sm" name="id" value="<?php echo e($field->id); ?>">
                    </td>
                </tr>
                <tr>
                    <th>分类ID：</th>
                    <td>
                        <input type="text" class="sm" name="cate" value="<?php echo e($field->id); ?>">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <input type="text" class="sm" name="describe" value="<?php echo e($field->describe); ?>">
                    </td>
                </tr>
                <tr>
                    <th>缩略图：</th>
                    <td>
                        <input type="text" size="50" name="image" value="<?php echo e($field->image); ?>">
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
                                        $('input[name=image]').val(data);
                                        $('#art_thumb_img').attr('src','/'+data);
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
                        <img alt="" id="art_thumb_img" style="max-width: 350px; max-height:150px;" src="/<?php echo e($field->image); ?>">
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