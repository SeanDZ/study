<?php $__env->startSection('title','莫夫主页'); ?>
<?php $__env->startSection('content'); ?>
   <!--slide-->
   <div id="wrapper">
      <div class="fullwidthbanner-container">
         <div class="fullwidthbanner">
            <ul>
               <?php foreach($image as $v): ?>
               <li><img src="/<?php echo e($v->imgs); ?>" alt="" /></li>
               <?php endforeach; ?>
            </ul>
         </div>
         <div class="tp-leftarrow"><img src="/resources/views/home/style/img/left.png"></div>
         <div class="tp-rightarrow"><img src="/resources/views/home/style/img/right.png"></div>
         </div>
   </div>

   <!--新作品展览 1-->
   <div id="picture-list">
      <ul class="plist">
         <?php foreach($twelve as $v): ?>
         <li><a href=""><img src="/<?php echo e($v->image); ?>"></a></li>
         <?php endforeach; ?>
      </ul>
   </div>
   
   <!--作品展览1-->
   <div id="images">
      <?php foreach($technology as $v): ?>
        <div class="image">
           <ul>
              <li class="div"><?php echo e($v->title); ?></li>
              <li><?php echo e($v->describe); ?></li>
              <li><a href="">进一步了解 ></a></li>
           </ul>
           <img src="/<?php echo e($v->image); ?>">
        </div>
      <?php endforeach; ?>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mof', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>