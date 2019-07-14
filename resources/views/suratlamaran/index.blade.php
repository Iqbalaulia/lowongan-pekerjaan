@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Surat lamaran</span>
        <h3 class="page-title">Surat Lamaran Calon Karyawan</h3>
    </div>
</div>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Github</th>
            <th>Gitlab</th>
            <th>Linkedin</th>
            <th>Keahlian</th>
            <th>Divisi</th>
            <th>Berkas Lamaran</th>
            <th>Test Dokumen</th>
            <th>Test Coding</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $lamaran)
        <tr>
            <td><img src="{{ URL::to('/') }}/foto/{{ $lamaran->image }}" class="img-thumbnail" width="75" /></td>
            <td>{{$lamaran->nama_lengkap}}</td>
            <td><a href="{{$lamaran->github}}" target="_blank">{{$lamaran->github}}</a></td>
            <td><a href="{{$lamaran->gitlab}}" target="_blank">{{$lamaran->gitlab}}</a></td>
            <td><a href="{{$lamaran->linkedin}}" target="_blank">{{$lamaran->linkedin}}</a></td>
            <td>{{$lamaran->keahlian}}</td>
            <td>{{$lamaran->divisi_lamaran}}</td>
            <td><a href="{{ URL::to('/') }}/curiculumVitae/{{ $lamaran->files }}" class="img-thumbnail" width="75"
                    target="_blank">{{ $lamaran->files }}</td>
            <td>{{ $lamaran->status_test_satu }}</td>
            <td></td>
            <td width="15%">
                <div class="action">
                   <div class="row">
                    <ul>
                        <li><a href="{{ route('suratlamaran.show',$lamaran->id) }}" class="btn btn-primary">View</a>
                        </li>
                        <li>
                            <a style="width:100%" href="" class="btn btn-success">Diterima</a>
                        </li>
                        <li>
                            <a href="{{ url('email-ditolak') }}" class="btn btn-danger">Ditolak</a>
                            
                        </li>
                      
                    </ul>
                   </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Github</th>
            <th>Gitlab</th>
            <th>Linkedin</th>
            <th>Keahlian</th>
            <th>Divisi</th>
            <th>Berkas Lamaran</th>
            <th>Test Dokumen</th>
            <th>Test Coding</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

{{--  --}}
<hr>
<hr>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Jumlah Pelamar</span>
        <h3 class="page-title">Jumlah Lamaran Calon Karyawan</h3>
    </div>
</div>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Github</th>
            <th>Gitlab</th>
            <th>Linkedin</th>
            <th>Keahlian</th>
            <th>Divisi</th>
            <th>Berkas Lamaran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($backup as $lamaran)
        <tr>
            <td><img src="{{ URL::to('/') }}/foto/{{ $lamaran->image }}" class="img-thumbnail" width="75" /></td>
            <td>{{$lamaran->nama_lengkap}}</td>
            <td><a href="{{$lamaran->github}}" target="_blank">{{$lamaran->github}}</a></td>
            <td><a href="{{$lamaran->gitlab}}" target="_blank">{{$lamaran->gitlab}}</a></td>
            <td><a href="{{$lamaran->linkedin}}" target="_blank">{{$lamaran->linkedin}}</a></td>
            <td>{{$lamaran->keahlian}}</td>
            <td>{{$lamaran->divisi_lamaran}}</td>
            <td><a href="{{ URL::to('/') }}/curiculumVitae/{{ $lamaran->files }}" class="img-thumbnail" width="75"
                    target="_blank">{{ $lamaran->files }}</td>
            <td width="15%">
                <div class="action">
                    <ul>
                        <li><a href="" class="btn btn-primary">View</a></li>

                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Github</th>
            <th>Gitlab</th>
            <th>Linkedin</th>
            <th>Keahlian</th>
            <th>Divisi</th>
            <th>Berkas Lamaran</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
@endsection