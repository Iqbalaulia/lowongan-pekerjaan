<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Surat lamaran</span>
        <h3 class="page-title">Surat Lamaran Calon Karyawan</h3>
    </div>
</div>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Nama Pelamar</th>
            <th>Keahlian</th>
            <th>Linkedin</th>
            <th>Divisi</th>
            <th>Berkas Lamaran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lamaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($lamaran->nama_lengkap); ?></td>
            <td><?php echo e($lamaran->keahlian); ?></td>
            <td><a href="<?php echo e($lamaran->linkedin); ?>" target="_blank" ><?php echo e($lamaran->linkedin); ?></a></td>
            <td><?php echo e($lamaran->divisi_lamaran); ?></td>
            <td><a href="<?php echo e(URL::to('/')); ?>/curiculumVitae/<?php echo e($lamaran->files); ?>" class="img-thumbnail"
                width="75"  target="_blank" ><?php echo e($lamaran->files); ?></td>
            <td width="15%">
                <div class="action">
                    <ul>
                        <li><a href="" class="btn btn-primary">View</a></li>
                        <li>

                            <form action="" method="POST">
                                <input type="hidden" name="_method" value="Tolak">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-danger" value="Tolak">
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
        <tr>
        <th>Nama Pelamar</th>
            <th>Keahlian</th>
            <th>Linkedin</th>
            <th>Divisi</th>
            <th>Berkas Lamaran</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/suratlamaran/index.blade.php ENDPATH**/ ?>