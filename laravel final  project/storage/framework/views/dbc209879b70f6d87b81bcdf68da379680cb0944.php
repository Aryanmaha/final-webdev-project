
<?php $__env->startSection('title',"categories"); ?>

<?php $__env->startSection('title',"categories"); ?>

<?php $__env->startSection('title',"categories"); ?>

<?php $__env->startSection('content'); ?>
<?php
$categories =  App\Models\Category::where('navbar_status','0')->where('status','0')->get();
?>
<main class="container category_main">
<h1>Categories</h1>
<div class="category_grid">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cateitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="category">
         <a href="<?php echo e(url('category/'.$cateitem->slug)); ?>">
              <img src="<?php echo e(asset('uploads/category/'.$cateitem->image)); ?>" alt="">
              <div class="category_title">
                <h2><?php echo e($cateitem->name); ?></h2>
            </div>
            </a></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/frontend/category.blade.php ENDPATH**/ ?>