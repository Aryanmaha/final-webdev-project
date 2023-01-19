

<?php $__env->startSection('title','Category'); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add category</h4>
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
               <div class="alert alert-danger">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div><?php echo e($error); ?></div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(url('admin/add-category')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">description</label>
                    <textarea name="description" class="form-control" rows="5" id="mySummernote" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <h6> SEO Tags </h6>
                <div class="mb-3">
                    <label for="">Meta title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta description</label>
                    <textarea name="meta_description" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">meta Keywords</label>
                    <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                </div>

                <h6>Status mode </h6>
                <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="">NavBar Status</label>
                    <input type="checkbox" name="navbar_status">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-8 ">
                    <button type="submit" class="btn  btn-primary"> Save Category</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/admin/category/create.blade.php ENDPATH**/ ?>