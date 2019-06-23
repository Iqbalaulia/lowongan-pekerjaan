@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Persetujuan Pengajuan</span>
        <h3 class="page-title">Persetujuan Pengajuan</h3>
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
                        <th>Persetujuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data_persetujuan)
                    <tr>
                        <td><img src="{{ URL::to('/') }}/images/{{ $data_persetujuan->image }}" class="img-thumbnail"
                                width="75" /></td>
                        <td>{{$data_persetujuan->divisi}}</td>
                        <td>{{$data_persetujuan->jumlah}} Orang</td>
                        <td>{{$data_persetujuan->pembukaan_rek}}</td>
                        <td>{{$data_persetujuan->penutupan_rek}}</td>
                        <td>{{$data_persetujuan->gaji }}</td>
                        <td>{{$data_persetujuan->pihak_bertanggungjwb}}</td>
                        <td>{{$data_persetujuan->sebab_pengajuan}}</td>
                        <td>{{$data_persetujuan->status }}</td>
                        <td width="15%">
                            <div class="action">
                                <ul>
                                    <li>
                                        {{-- <a href="{{route('requestpengajuan.edit',[$data_persetujuan->id])}}"
                                            class="btn btn-success">
                                            <img src="https://img.icons8.com/color/20/000000/checked-2.png">
                                            Setuju
                                        </a> --}}
                                        <a href="{{ route('persetujuan_pengajuan.show',$data_persetujuan->id) }}" class="btn btn-primary">
                                                <img src="https://img.icons8.com/ultraviolet/30/000000/show-property.png">
                                            Show
                                        </a>
                                    </li>

                                    {{-- <li>
                                        <form action="{{route('requestpengajuan.destroy',[$data_persetujuan->id])}}"
                                            method="POST">
                                            <input type="hidden" name="_method" value="Delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">
                                                <img
                                                    src="https://img.icons8.com/ios-glyphs/20/000000/exclamation-mark.png">
                                                Tidak</button>
                                        </form>
                                    </li> --}}

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
                        <th>Persetujuan</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    {!! $data->links() !!}
</div>
@endsection