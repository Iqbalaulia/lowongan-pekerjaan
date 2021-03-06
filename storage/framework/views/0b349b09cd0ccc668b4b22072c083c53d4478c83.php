<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Request pengajuan lowongan</span>
        <h3 class="page-title">Request pengajuan lowongan</h3>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
            <div class="card-body">
                <form class="kt-form kt-form--label-right" action="<?php echo e(url('requestpengajuan')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <label for="divisi">Divisi</label>
                    <input name="divisi" class="form-control form-control-lg mb-3" type="text"
                        placeholder="Masukan divisi yang hendak melakukan pembukaan pekerjaan">
                    <label for="sebab_pengajuan">Sebab pengajuan</label>
                    <textarea name="sebab_pengajuan" type="text" class="form-control form-control-lg mb-3"></textarea>
                    <label for="jumlah">Jumlah yang dibutuhkan</label>
                    <input name="jumlah" class="form-control form-control-lg mb-3" type="number"
                        placeholder="Your Post Title">


                    <div class="row">
                        <div class="col-md-4">

                            <label for="pembukaan_rek">Jangka waktu open recruitment</label>
                            <input name="pembukaan_rek" class="form-control form-control-lg mb-3" type="date"
                                placeholder="Your Post Title">
                        </div>

                        <div class="col-md-4">

                            <label for="penutupan_rek">Penutupan open recruitment</label>
                            <input name="penutupan_rek" class="form-control form-control-lg mb-3" type="date"
                                placeholder="Your Post Title">
                        </div>
                        <div class="col-md-4">

                            <label for="gaji">Gaji</label>
                            <input name="gaji" class="form-control form-control-lg mb-3" type="number"
                                placeholder="Gaji Karyawan">
                        </div>

                    </div>

                    
                        <label for="pihak_bertanggungjwb">Pihak bertanggung jawab</label>
                        <input name="pihak_bertanggungjwb" class="form-control form-control-lg mb-3" type="text"
                            placeholder="Your Post Title">
                    

                    
                        <label for="image">Thumbnail</label>
                        <br/>
                        <input type="file" name="image" />
                    

                    <button type="submit" class="btn btn-sm btn-accent ml-auto float-right">
                        <i class="material-icons">file_copy</i> Publish</button>

            </div>

        </div>
    </div>
    <!-- / Add New Post Form -->
</div>


</div>

</div>
</form>
</div>
<!-- End Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/requestpengajuan/create.blade.php ENDPATH**/ ?>