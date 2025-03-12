<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-10 col-xl-8 mx-auto">
        <div class="d-flex align-items-center mb-4">
            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h2 class="mb-0">Tambah Pegawai Baru</h2>
        </div>
        
        <div class="card">
            <div class="card-header">
                <i class="bi bi-person-plus me-2"></i>Form Tambah Pegawai
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger mb-4">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                <form action="<?php echo e(route('employees.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="position" class="col-sm-3 col-form-label">Posisi/Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="position" name="position" value="<?php echo e(old('position')); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="salary" class="col-sm-3 col-form-label">Gaji (Rp)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="salary" name="salary" value="<?php echo e(old('salary')); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i>Simpan Data
                            </button>
                            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-secondary ms-2">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/workspace/resources/views/employees/create.blade.php ENDPATH**/ ?>