

<?php $__env->startSection('title', 'Outlet List'); ?>
<?php $__env->startSection('content-header', 'Outlet List'); ?>
<?php $__env->startSection('content-actions'); ?>
    <a href="<?php echo e(route('outlets.create')); ?>" class="btn btn-primary">Add Outlet</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Outlet Name</th>
                    <th>Hotline</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $outlets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outlet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($outlet->id); ?></td>
                        <td><?php echo e($outlet->outlet_name); ?></td>
                        <td><?php echo e($outlet->hotline); ?></td>
                        <td><?php echo e($outlet->email); ?></td>
                        <td><?php echo e($outlet->address); ?></td>
                        <td><?php echo e($outlet->created_at); ?></td>
                        <td>
                            <a href="<?php echo e(route('outlets.show', $outlet)); ?>" class="btn btn-success"><i
                                    class="fas fa-eye"></i></a>
                            <a href="<?php echo e(route('outlets.edit', $outlet)); ?>" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-delete" data-url="<?php echo e(route('outlets.destroy', $outlet)); ?>"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($outlets->render()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-delete', function () {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you really want to delete this outlet?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {_method: 'DELETE', _token: '<?php echo e(csrf_token()); ?>'}, function (res) {
                            $this.closest('tr').fadeOut(500, function () {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ori-laundry\resources\views/outlets/index.blade.php ENDPATH**/ ?>