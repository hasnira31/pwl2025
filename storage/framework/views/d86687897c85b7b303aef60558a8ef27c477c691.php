<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Pegawai</h5>
                <a class="btn btn-sm btn-secondary" href="<?php echo e(route('employees.index')); ?>">
                    <i class="bi bi-arrow-left me-1"></i>Kembali
                </a>
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('employees.update', $employee->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $employee->name)); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label">Posisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="position" name="position" value="<?php echo e(old('position', $employee->position)); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="salary" class="col-sm-2 col-form-label">Gaji</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="salary" name="salary" value="<?php echo e(old('salary', $employee->salary)); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/workspace/resources/views/employees/edit.blade.php ENDPATH**/ ?>