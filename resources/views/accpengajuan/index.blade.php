@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Persetujuan pengajuan </span>
        <h3 class="page-title">Persetujuan pengajuan karyawan baru</h3>
    </div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <h4>{{ $message }}</h4>
</div>
@endif
{{--  --}}

<div class="row">
    @foreach ($data as $data_pengajuan)
    <div class="col-lg-6 col-sm-12 mb-4">
        <div class="card card-small card-post card-post--aside card-post--1">

            <div class="card-body">
                <img src="{{ URL::to('/') }}/images/{{ $data_pengajuan->image }}" class="img-thumbnail" width="100%" />
                <hr>
                <h5 class="card-title">
                    <a class="text-fiord-blue" href="#">Pengajuan persetujuan untuk penambahan anggota
                        {{$data_pengajuan->divisi  }}</a>
                </h5>
                <p class="card-text d-inline-block mb-3">
                    {{ $data_pengajuan->sebab_pengajuan }}
                </p>
                <span class="text-muted">{{ $data_pengajuan->updated_at->format('d, M Y') }}</span>
                <div class="row">
                    <div class="col-md-6">
                        @if($data_pengajuan->status == "Diterima")
                        <div class="create-approved">
                            <a href="{{ route('creatependaftaran.show',$data_pengajuan->id) }}" class="btn btn-primary">Pembuatan Pendaftaran</a>
                        </div>
                        @elseif($data_pengajuan->status == "Ditolak")
                        <div class="create-approved">
                            <button disabled="disabled" class="btn btn-danger">Pembuatan Ditolak</button> 
                        </div>
                        @else
                        <div class="create-approved">
                                <button disabled="disabled" class="btn btn-danger">Pembuatan Belum Di Approve</button> 
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">

                        <div class="status">
                            <h4 class="text-right">{{ $data_pengajuan->status }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    @endforeach
</div>

@endsection