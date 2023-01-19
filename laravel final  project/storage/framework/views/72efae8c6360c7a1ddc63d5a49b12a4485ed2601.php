

<?php $__env->startSection('title','Category'); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Category 
                <a href="<?php echo e(url('admin/add-category')); ?>" class="btn btn-primary btn-sm float-end"> Add category</a>
            </h4>
        </div>
        <div class="card-body">
        <?php if(session('message')): ?>
          <div class = "alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>

        <table id="mydataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID </th>
                    <TH>Category Name</TH>
                    <th>Category Description</th>
                    <th>image</th>
                    <th>status</th> 
                    <th>Edit/delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->description); ?></td>
                    <td>
                        <img src="<?php echo e(asset('uploads/category/'.$item->image)); ?>" width="100x" height="100px" alt="">
                    </td>
                    <td><?php echo e($item->status == "1" ? 'hidden':'shown'); ?></td>
                    <td>
                        <a href="<?php echo e(url('admin/edit-category/'.$item->id)); ?>" class="btn btn-success">edit</a>
                    
                        <a href="<?php echo e(url('admin/delete-category/'.$item->id)); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
 </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/admin/category/index.blade.php ENDPATH**/ ?>