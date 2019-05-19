<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Request pengajuan</span>
        <h3 class="page-title">Request pengajuan</h3>
    </div>
</div>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Divisi</th>
            <th>Sebab pengajuan</th>
            <th>Jumlah yang dibutuhkan</th>
            <th>Jangkah waktu</th>
            <th>Akhir waktu</th>
            <th>Pihak bertanggung jawab</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td width="15%">
                <div class="action">
                    <ul>
                        <li><a href="<?php echo e(url('requestpengajuan.edit')); ?>" class="btn btn-primary">Edit</a></li>
                        <li>
                        
                            <form action="" method="POST">
                                <input type="hidden" name="_method" value="Delete">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>Divisi</th>
            <th>Sebab pengajuan</th>
            <th>Jumlah yang dibutuhkan</th>
            <th>Jangkah waktu</th>
            <th>Akhir waktu</th>
            <th>Pihak bertanggung jawab</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
<div class="row">
    <div class="col-md-8">
      
    </div>
    <div class="col-md-4">
    <div class="button-box mt-2">
        <a href="<?php echo e(route('requestpengajuan.create')); ?>" class="btn btn-primary"> Tambah data</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/requestpengajuan/index.blade.php ENDPATH**/ ?>