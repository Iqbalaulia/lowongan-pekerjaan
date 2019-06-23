<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Persetujuan pengajuan </span>
        <h3 class="page-title">Persetujuan pengajuan karyawan baru</h3>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_pengajuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-6 col-sm-12 mb-4">
        <div class="card card-small card-post card-post--aside card-post--1">
           
            <div class="card-body">
                <img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data_pengajuan->image); ?>" class="img-thumbnail" width="100%" />
                <hr>
                <h5 class="card-title">
                    <a class="text-fiord-blue" href="#">Pengajuan persetujuan untuk penambahan anggota
                        <?php echo e($data_pengajuan->divisi); ?></a>
                </h5>
                <p class="card-text d-inline-block mb-3">
                    <?php echo e($data_pengajuan->sebab_pengajuan); ?>

                </p>
                <span class="text-muted"><?php echo e($data_pengajuan->updated_at->format('d, M Y')); ?></span>
                <h4 class="text-right"><?php echo e($data_pengajuan->status); ?></h4>
            </div>
        </div>


    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/accpengajuan/index.blade.php ENDPATH**/ ?>