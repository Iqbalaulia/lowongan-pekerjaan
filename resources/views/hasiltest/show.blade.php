@extends('index')
@section('content')

<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Data Calon Karyawan</span>
        <h3 class="page-title">Data Calon Karyawan</h3>
    </div>
</div>

<div align="right">
    <a href="{{ route('suratlamaran.index') }}" class="btn btn-primary">
        <img src="https://img.icons8.com/metro/20/000000/left.png">
        Kembali
    </a>
</div>
<br />

<div class="jumbotron text-left" style="width:20%">
    <img src="{{ URL::to('/') }}/foto/{{ $data->image }}" class="img-thumbnail" />
</div>

<div class="col-md-12">
    <br />
    <p class="title text-center">Data Calon Karyawan</p>

    <div class="information">
        <div class="row">
            <div class="col-md-6">
                <label for="">Nama Lengkap</label>
                <h5>{{ $data->nama_lengkap }}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="">Linkedin</label>
                <h5>  <a target="_blank" href="{{ $data->linkedin }}">{{ $data->linkedin }}</a></h5>
              
            </div>
            <div class="col-md-4">
                <label for="">Github</label>
                <h5>  <a target="_blank" href="{{ $data->github }}">{{ $data->github }}</a></h5>
            </div>
            <div class="col-md-4">
                <label for="">Gitlab</label>
                <h5>  <a target="_blank" href="{{ $data->gitlab }}">{{ $data->gitlab }}</a></h5>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <label for="">Divisi Lamaran</label>
                <input type="text" class="form-control form-control-lg mb-3" value="{{ $data->divisi_lamaran }}" disabled>
            </div>
            <div class="col-md-6">
                <label for="">Curiculum Vitae</label>
                <a  href="{{ URL::to('/') }}/curiculumVitae/{{ $data->files }}" class="img-thumbnail"
                    width="75"  target="_blank" ><p target="_blank">{{ $data->files }}</p></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="">Keahlian</label>
                <textarea name="" id="" cols="30" rows="10"
                    class="form-control form-control-lg mb-3">{{ $data->keahlian }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="">Test Administrasi</label>
                <input type="text" class="form-control form-control-lg mb-3" value="{{ $data->status_test_satu }}" disabled>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="right">
                <form action="{{route('suratlamaran.update',[$data->id])}}" method="post"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    
                    <button type="submit" name="status_test_satu" class="btn btn-success">
                        <input name="status_test_satu" value="Diterima" type="hidden">
                        Diterima
                    </button>
                    <button type="submit" name="status_test_satu" class="btn btn-danger">
                        <input name="status_test_satu" value="Ditolak" type="hidden">
                        Ditolak
                    </button>
                </form>
            </div>

        </div>
    </div>



</div>
@endsection