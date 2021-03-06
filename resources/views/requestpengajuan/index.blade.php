@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Request Pengajuan</span>
        <h3 class="page-title">Request Pengajuan</h3>
    </div>
</div>
{{--  --}}
@if($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <h4>{{ $message }}</h4>
</div>
@endif
{{--  --}}
<div class="table-white bg-white">
    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            <div class="button-box mt-2">

                <a href="{{route('requestpengajuan.create')}}" class="btn btn-success">
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
                    @foreach ($data as $show_data)
                    <tr>
                        <td><img src="{{ URL::to('/') }}/images/{{ $show_data->image }}" class="img-thumbnail"
                                width="75" /></td>
                        <td>{{$show_data->divisi}}</td>
                        <td>{{$show_data->jumlah}} Orang</td>
                        <td>{{$show_data->pembukaan_rek}}</td>
                        <td>{{$show_data->penutupan_rek}}</td>
                        <td>{{$show_data->gaji }}</td>
                        <td>{{$show_data->pihak_bertanggungjwb}}</td>
                        <td>{{$show_data->sebab_pengajuan}}</td>
                        <td>{{ $show_data->status }}</td>
                        <td width="15%">
                            <div class="action">
                                <ul>
                                    <li><a href="{{route('requestpengajuan.edit',[$show_data->id])}}"
                                            class="btn btn-primary">
                                            <img src="https://img.icons8.com/wired/15/000000/edit.png">
                                            Edit</a></li>
                                    <li>

                                        <form action="{{route('requestpengajuan.destroy',[$show_data->id])}}"
                                            method="POST">
                                            <input type="hidden" name="_method" value="Delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">
                                                <img src="https://img.icons8.com/wired/15/000000/trash.png">
                                                Delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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
    {!! $data->links() !!}
</div>

@endsection