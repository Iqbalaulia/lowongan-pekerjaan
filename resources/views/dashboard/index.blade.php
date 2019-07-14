@extends('index')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="jumlah_pelamar">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://img.icons8.com/dusk/150/000000/data-backup.png">
                    </div>
                    <div class="col-md-8">
                        <h5>Data Pelamar</h5>
                        <hr>
                        <h1>{{ $count_total_lamaran }} Orang</h1>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-md-4">
            <div class="jumlah_pelamar">
                <div class="row">
                    <div class="col-md-4">
                            <img src="https://img.icons8.com/dusk/150/000000/document.png">
                    </div>
                    <div class="col-md-8">
                        <h5>Diterima Administrasi</h5>
                        <hr>
                        <h1>{{ $count_total_diterima_administrasi }} Orang</h1>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-md-4">
            <div class="jumlah_pelamar">
                <div class="row">
                    <div class="col-md-4">
                            <img src="https://img.icons8.com/cotton/150/000000/computer.png">
                    </div>
                    <div class="col-md-8">
                        <h5>Diterima Test Pemrograman</h5>
                        <hr>
                        <h1>{{ $count_total_diterima_coding }} Orang</h1>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="jumlah_pelamar">
                <div class="row">
                    <div class="col-md-4">
                            <img src="https://img.icons8.com/bubbles/150/000000/work.png">
                    </div>
                    <div class="col-md-8">
                        <h5>Diterima Kerja</h5>
                        <hr>
                        <h1>{{ $data_diterima_kerja }} Orang</h1>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
    </div>
</div>
@endsection