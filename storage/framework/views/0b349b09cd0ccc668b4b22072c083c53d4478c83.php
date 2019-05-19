<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Request pengajuan lowongan</span>
        <h3 class="page-title">Request pengajuan lowongan</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
            <div class="card-body">
                <form class="kt-form kt-form--label-right" action="<?php echo e(url('addnewpost')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <label for="judul">Divisi</label>
                    <input name="judul" class="form-control form-control-lg mb-3" type="text"
                        placeholder="Your Post Title">
                    <label for="berita">Sebab pengajuan</label>
                    <textarea name="berita" type="text" class="form-control form-control-lg mb-3"></textarea>
                    <label for="judul">Jumlah yang dibutuhkan</label>
                    <input name="judul" class="form-control form-control-lg mb-3" type="text"
                        placeholder="Your Post Title">


                    <div class="row">

                        <div class="col-md-6">

                            <label for="judul">Jangka waktu open recruitment</label>
                            <input name="judul" class="form-control form-control-lg mb-3" type="date"
                                placeholder="Your Post Title">
                        </div>

                        <div class="col-md-6">

                            <label for="judul">Penutupan open recruitment</label>
                            <input name="judul" class="form-control form-control-lg mb-3" type="date"
                                placeholder="Your Post Title">
                        </div>

                    </div>


                    <label for="judul">Pihak bertanggung jawab</label>
                    <input name="judul" class="form-control form-control-lg mb-3" type="text"
                        placeholder="Your Post Title">

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