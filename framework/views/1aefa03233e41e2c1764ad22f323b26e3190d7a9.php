<?php $__env->startSection('title', 'Show Laundry'); ?>
<?php $__env->startSection('content-header', 'Show Laundry'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-body">

                <div class="form-group">
                    <img width="200" src="<?php echo e($product->getImg()); ?>" alt="">
                </div>

                <div class="form-group">
                    <label>Name : </label>
                    <?php echo e($product->name); ?>

                </div>

                <div class="form-group">
                    <label>Description : </label>
                    <?php echo e($product->description); ?>

                </div>

                <div class="form-group">
                    <label>Barcode : </label>
                    <?php echo e($product->barcode); ?>

                </div>

                <div class="form-group">
                    <label for="">Price : </label>
                    <?php echo e($product->price); ?>

                </div>

                <div class="form-group">
                    <label for="">Quantity(kg) : </label>
                    <?php echo e($product->quantity); ?>

                </div>

                <div class="form-group">
                    <label for="">Status : </label>
                    <?php if($product->status==1): ?> Active <?php else: ?> Inactive <?php endif; ?>
                </div>

                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-info" type="submit">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ori Laundry\resources\views/products/show.blade.php ENDPATH**/ ?>