<?php $__env->startSection('content'); ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Request Pengajuan</span>
        <h3 class="page-title">Request Pengajuan</h3>
    </div>
</div>

<?php if($message = Session::get('success')): ?>
<div class="alert alert-success" role="alert">
    <h4><?php echo e($message); ?></h4>
</div>
<?php endif; ?>

<div class="table-white bg-white">
    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            <div class="button-box mt-2">

                <a href="<?php echo e(route('requestpengajuan.create')); ?>" class="btn btn-success">
                    <img src="https://img.icons8.com/wired/25/000000/plus.png"> Tambah data</a>
            </div>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
                <thead>
                    <tr>
                        <th>Thumbnail</th>
                        <th>Divisi</th>
                        <th>Jumlah Anggota</th>
                        <th>Pembukaan</th>
                        <th>Penutupan</th>
                        <th>Gaji / Karyawan</th>
                        <th>Penyelia</th>
                        <th>Sebab pengajuan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($show_data->image); ?>" class="img-thumbnail"
                                width="75" /></td>
                        <td><?php echo e($show_data->divisi); ?></td>
                        <td><?php echo e($show_data->jumlah); ?> Orang</td>
                        <td><?php echo e($show_data->pembukaan_rek); ?></td>
                        <td><?php echo e($show_data->penutupan_rek); ?></td>
                        <td><?php echo e($show_data->gaji); ?></td>
                        <td><?php echo e($show_data->pihak_bertanggungjwb); ?></td>
                        <td><?php echo e($show_data->sebab_pengajuan); ?></td>
                        <td><?php echo e($show_data->status); ?></td>
                        <td width="15%">
                            <div class="action">
                                <ul>
                                    <li><a href="<?php echo e(route('requestpengajuan.edit',[$show_data->id])); ?>"
                                            class="btn btn-primary">
                                            <img src="https://img.icons8.com/wired/15/000000/edit.png">
                                            Edit</a></li>
                                    <li>

                                        <form action="<?php echo e(route('requestpengajuan.destroy',[$show_data->id])); ?>"
                                            method="POST">
                                            <input type="hidden" name="_method" value="Delete">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <button type="submit" class="btn btn-danger">
                                                <img src="https://img.icons8.com/wired/15/000000/trash.png">
                                                Delete</button>
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
                        <th>Thumbnail</th>
                        <th>Divisi</th>
                        <th>Jumlah Anggota</th>
                        <th>Pembukaan</th>
                        <th>Penutupan</th>
                        <th>Gaji / Karyawan</th>
                        <th>Penyelia</th>
                        <th>Sebab pengajuan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <?php echo $data->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/requestpengajuan/index.blade.php ENDPATH**/ ?>