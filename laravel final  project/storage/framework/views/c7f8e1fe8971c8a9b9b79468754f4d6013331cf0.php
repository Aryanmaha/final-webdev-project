

<?php $__env->startSection('title','view post'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

<div class = "card mt-4">
    <div class="card-header">
        <h4>View Posts
            <a href="<?php echo e(url('admin/add-post')); ?>" class="btn btn-primary float-end"> ADD posts</a>
        </h4>
    </div>
    <div class="card-body">
    <?php if(session('message')): ?>
          <div class = "alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>
        <table id="mydataTable" class ="table table-bordered">
            <thead>
                <tr>
                <th>ID </th>
                <th>Category</th>
                <th>Post Name</th>
                <th>Status</th>
                <th>Edit/delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->category->name); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->status == '1' ? 'hidden':'visible'); ?></td>
                    <td>
                        <a href="<?php echo e(url('admin/post/'.$item->id)); ?>" class="btn btn-success"> Edit</a>
                        <a href="<?php echo e(url('admin/delete-post/'.$item->id)); ?>" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/admin/post/index.blade.php ENDPATH**/ ?>