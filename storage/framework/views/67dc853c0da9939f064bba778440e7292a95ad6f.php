<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0"><i class="bi bi-list-ul me-2"></i>Daftar Pegawai</h2>
            <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i>Tambah Pegawai
            </a>
        </div>
        
        <div class="card">
            <div class="card-body p-0">
                <?php if(count($employees) > 0): ?>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th width="60" class="text-center">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Gaji</th>
                                <th width="220" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration + $employees->firstItem() - 1); ?></td>
                                <td><?php echo e($employee->name); ?></td>
                                <td><?php echo e($employee->position); ?></td>
                                <td><?php echo e($employee->formatted_salary); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('employees.show', $employee->id)); ?>" class="btn btn-sm btn-info text-white">
                                        <i class="bi bi-eye me-1"></i>Detail
                                    </a>
                                    <a href="<?php echo e(route('employees.edit', $employee->id)); ?>" class="btn btn-sm btn-warning text-white">
                                        <i class="bi bi-pencil-square me-1"></i>Edit
                                    </a>
                                    <form action="<?php echo e(route('employees.destroy', $employee->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash me-1"></i>Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="p-3">
                    <?php echo e($employees->links()); ?>

                </div>
                <?php else: ?>
                <div class="p-4 text-center">
                    <i class="bi bi-exclamation-circle fs-1 text-muted"></i>
                    <p class="mt-2 mb-0">Belum ada data pegawai yang tersedia</p>
                    <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary mt-3">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Pegawai Pertama
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/workspace/resources/views/employees/index.blade.php ENDPATH**/ ?>