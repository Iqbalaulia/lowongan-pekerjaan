<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Hasil Test</span>
        <h3 class="page-title">Hasil Test Calon Karyawan</h3>
    </div>
</div>

<div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            <div class="button-box mt-2">

                    <a href="<?php echo e(route('hasil-test.create')); ?>" class="btn btn-success">
                    <img src="https://img.icons8.com/wired/25/000000/plus.png"> Tambah data</a>
            </div>
        </div>

    </div>
    <br/>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Nama Pelamar</th>
            <th>Hasil Test</th>
            <th>Posisi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($hasil_test->nama_pelamar); ?></td>
            <td><?php echo e($hasil_test->hasil); ?></td>
            <td><?php echo e($hasil_test->posisi); ?></td>
            <td width="15%">
                <div class="action">
                    <ul>
                        <li><a href="" class="btn btn-success">Terima</a></li>
                        <li>
                        
                            <form action="" method="POST">
                                <input type="hidden" name="_method" value="Delete">
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
            <th>Hasil Test</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/hasiltest/index.blade.php ENDPATH**/ ?>