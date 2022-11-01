<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>How Lucky are You? Choose One!!</h3>
    <br>
    <div class="btn-group-horizontal d-flex">
        <div class="justify-content-center row">
            <img class="rounded" style="width: 200px" src="https://cdn.dribbble.com/users/1053295/screenshots/4653865/media/8b4f7085511cfc9c2bd608f7d202f386.jpg" alt="">
            <button type="button" onclick="window.location='<?php echo e(url("prize/1")); ?>'" class="btn btn-primary btn-lg m-5">Mystery Box 1</button>
        </div>

        <div class="justify-content-center row">
            <img class="rounded" style="width: 200px" src="https://cdn.dribbble.com/users/1053295/screenshots/4653865/media/8b4f7085511cfc9c2bd608f7d202f386.jpg" alt="">
            <button type="button" onclick="window.location='<?php echo e(url("prize/2")); ?>'" class="btn btn-warning btn-lg m-5">Mystery Box 2</button>
        </div>
        <div class="justify-content-center row">
            <img class="rounded" style="width: 200px" src="https://cdn.dribbble.com/users/1053295/screenshots/4653865/media/8b4f7085511cfc9c2bd608f7d202f386.jpg" alt="">
            <button type="button" onclick="window.location='<?php echo e(url("prize/3")); ?>'" class="btn btn-success btn-lg m-5">Mystery Box 3</button>
        </div>
        <div class="justify-content-center row">
            <img class="rounded" style="width: 200px" src="https://cdn.dribbble.com/users/1053295/screenshots/4653865/media/8b4f7085511cfc9c2bd608f7d202f386.jpg" alt="">
            <button type="button" onclick="window.location='<?php echo e(url("prize/4")); ?>'" class="btn btn-info btn-lg m-5">Mystery Box 4</button>
        </div>
    </div>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GSLC-Session5\resources\views/welcome.blade.php ENDPATH**/ ?>