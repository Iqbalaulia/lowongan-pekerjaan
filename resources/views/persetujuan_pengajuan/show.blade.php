@extends('index')
@section('content')

<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Data Pengajuan</span>
        <h3 class="page-title">Data Pengajuan</h3>
    </div>
</div>

<div align="right">
    <a href="{{ route('persetujuan_pengajuan.index') }}" class="btn btn-primary">
        <img src="https://img.icons8.com/metro/20/000000/left.png">
        Kembali
    </a>
</div>
<br />

<div class="jumbotron text-left">
    <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
</div>

<div class="col-md-12">
    <br />
    <p class="title text-center">Pengajuan Persetujuan</p>

    <div class="information">
        <div class="row">
            <div class="col-md-6">
                <label for="">Pihak Bertanggung Jawab</label>
                <input type="text" class="form-control form-control-lg mb-3" value="{{ $data->pihak_bertanggungjwb }}"
                    disabled>
            </div>
            <div class="col-md-6">
                <label for="">Tanggal Pengajuan</label>
                <input type="text" class="form-control form-control-lg mb-3"
                    value="{{ $data->created_at->format('d, M Y') }}" disabled>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="">Divisi</label>
                <input type="text" class="form-control form-control-lg mb-3" value="{{ $data->divisi }}">
            </div>
            <div class="col-md-4">
                <label for="">Jumlah Tenaga Dibutuhkan</label>
                <input type="text" class="form-control form-control-lg mb-3" value="{{ $data->jumlah }} Orang">
            </div>
            <div class="col-md-4">
                <label for="">Gaji / Orang</label>
                <input type="text" class="form-control form-control-lg mb-3" value="Rp. {{ $data->gaji }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="">Tanggal Pembukaan Rekrutment</label>
                <input type="date" class="form-control form-control-lg mb-3" value="{{ $data->pembukaan_rek }}">
            </div>
            <div class="col-md-6">
                <label for="">Tanggal Penutupan Rekrutment</label>
                <input type="date" class="form-control form-control-lg mb-3" value="{{ $data->penutupan_rek }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="">Sebab Pengajuan</label>
                <textarea name="" id="" cols="30" rows="10"
                    class="form-control form-control-lg mb-3">{{ $data->sebab_pengajuan }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="right">
                <form action="{{route('persetujuan_pengajuan.update',[$data->id])}}" method="post"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}

                    <button type="submit" name="setuju" class="btn btn-success">
                        <input name="status" value="setuju" type="hidden">
                        Disetujui
                    </button>
                    <button type="submit" name="status" class="btn btn-danger">
                        <input name="status" value="tidak" type="hidden">
                        Tidak Disetujui
                    </button>
                </form>
            </div>

        </div>
    </div>



</div>
@endsection