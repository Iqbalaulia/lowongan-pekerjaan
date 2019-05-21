@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Edit Kategori</span>
        <h3 class="page-title">Edit Jenis Kategori</h3>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
            <div class="card-body">
                <form class="kt-form kt-form--label-right" action="{{route('requestpengajuan.update',[$getRequest->id])}}" method="POST">
                    {{csrf_field()}}
                    {{ method_field('PUT') }} 

                    <label for="divisi">Divisi</label>
                    <input name="divisi" class="form-control form-control-lg mb-3" type="text"
                       value="{{$getRequest->divisi}}">
                    <label for="sebab_pengajuan">Sebab pengajuan</label>
                    <textarea name="sebab_pengajuan" type="text" class="form-control form-control-lg mb-3">{{$getRequest->sebab_pengajuan}}</textarea>
                    <label for="jumlah">Jumlah yang dibutuhkan</label>
                    <input name="jumlah" class="form-control form-control-lg mb-3" type="text"
                        value="{{$getRequest->jumlah}}">


                    <div class="row">

                        <div class="col-md-6">

                            <label for="pembukaan_rek">Jangka waktu open recruitment</label>
                            <input name="pembukaan_rek" class="form-control form-control-lg mb-3" type="date"
                                value="{{$getRequest->pembukaan_rek}}">
                        </div>

                        <div class="col-md-6">

                            <label for="penutupan_rek">Penutupan open recruitment</label>
                            <input name="penutupan_rek" class="form-control form-control-lg mb-3" type="date"
                            value="{{$getRequest->penutupan_rek}}">
                        </div>

                    </div>


                    <label for="pihak_bertanggungjwb">Pihak bertanggung jawab</label>
                    <input name="pihak_bertanggungjwb" class="form-control form-control-lg mb-3" type="text"
                    value="{{$getRequest->pihak_bertanggungjwb}}">

                    <button type="submit" class="btn btn-sm btn-accent ml-auto float-right">
                        <i class="material-icons">file_copy</i> Update Data</button>

            </div>

        </div>
    </div>
    <!-- / Add New Post Form -->
</div>


</div>

</div>
</form>
</div>
@endsection
