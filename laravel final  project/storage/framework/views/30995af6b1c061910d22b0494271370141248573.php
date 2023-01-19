<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('assets/css/styles.css')); ?>" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- summer not css link  -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 0px !important;
            margin: 0px !important;
        }
        div.dataTables_wrapper div.dataTables_length select{
            width: 50% !important;
        }
    </style>
</head>
<body>
<?php echo $__env->make('layouts.inc.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="layoutSidenav">
<?php echo $__env->make('layouts.inc.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="layoutSidenav_content">
    <main>
        <?php echo $__env->yieldContent('content'); ?>
</main>
<?php echo $__env->make('layouts.inc.admin-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>

        <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
        <!-- summernote js link -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
           $(document).ready(function() {
        $("#mySummernote").summernote({
            height: 300,
        });
        $('.dropdown-toggle').dropdown();
         });
        </script>

        <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready( function () {
              $('#mydataTable').DataTable();
            } );
        </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\final_project\resources\views/layouts/master.blade.php ENDPATH**/ ?>