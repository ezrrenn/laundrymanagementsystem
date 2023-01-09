

<?php $__env->startSection('title', 'Show Customer'); ?>
<?php $__env->startSection('content-header', 'Show Customer'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-body">

                <div class="form-group">
                    <label>First Name : </label>
                    <?php echo e($customer->first_name); ?>

                </div>

                <div class="form-group">
                    <label for="outlet_name">Last Name : </label>
                    <?php echo e($customer->last_name); ?>

                </div>

                <div class="form-group">
                    <label for="outlet_name">Email : </label>
                    <?php echo e($customer->email); ?>

                </div>

                <div class="form-group">
                    <label for="outlet_name">Phone : </label>
                    <?php echo e($customer->phone); ?>

                </div>

                <div class="form-group">
                    <label for="outlet_name">Address : </label>
                    <?php echo e($customer->address); ?>

                </div>

                <div class="form-group">
                    <label for="outlet_name">Avatar : </label>
                    <img width="200" src="<?php echo e($customer->getAvatarUrl()); ?>" alt="">
                </div>

                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-info" type="submit">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dng-laundry\resources\views/customers/show.blade.php ENDPATH**/ ?>