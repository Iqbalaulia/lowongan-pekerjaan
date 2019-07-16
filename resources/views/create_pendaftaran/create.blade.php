@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Create Pendaftaran</span>
        <h3 class="page-title">Pendaftaran</h3>
    </div>
</div>

<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    <form class="kt-form kt-form--label-right" action="{{ url('creatependaftaran') }}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Thumbnail</label>
                                <br />

                                <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-poster" />
                                {{-- <input type="hidden" name="hidden_image" value="{{ $data->image }}" /> --}}
                                {{--  --}}
                            </div>
                            <div class="col-md-6">
                                <label for="divisi">Divisi</label>
                                <input name="divisi" class="form-control form-control-lg mb-3" type="text"
                                    value="{{$data->divisi}}">
                                <label for="sebab_pengajuan">Sebab pengajuan</label>
                                <textarea name="sebab_pengajuan" type="text"
                                    class="form-control form-control-lg mb-3">{{$data->sebab_pengajuan}}</textarea>
                                <label for="jumlah">Jumlah yang dibutuhkan</label>
                                <input name="jumlah" class="form-control form-control-lg mb-3" type="text"
                                    value="{{$data->jumlah}}">


                                <div class="row">

                                    <div class="col-md-6">

                                        <label for="pembukaan_rek">Jangka waktu open recruitment</label>
                                        <input name="pembukaan_rek" class="form-control form-control-lg mb-3"
                                            type="date" value="{{$data->pembukaan_rek}}">
                                    </div>

                                    <div class="col-md-6">

                                        <label for="penutupan_rek">Penutupan open recruitment</label>
                                        <input name="penutupan_rek" class="form-control form-control-lg mb-3"
                                            type="date" value="{{$data->penutupan_rek}}">
                                    </div>

                                </div>


                                <label for="pihak_bertanggungjwb">Pihak bertanggung jawab</label>
                                <input name="pihak_bertanggungjwb" class="form-control form-control-lg mb-3" type="text"
                                    value="{{$data->pihak_bertanggungjwb}}">

                                <label for="gaji">Gaji</label>
                                <input name="gaji" class="form-control form-control-lg mb-3" type="text"
                                    value="{{$data->gaji}}">

                                <label for="image">Poster</label>
                                <br />
                                <input type="file" name="image" />
                                {{--  --}}


                            </div>
                        </div>


                        <button type="submit" class="btn btn-sm btn-accent ml-auto float-right">
                            <i class="material-icons">file_copy</i> Create</button>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection