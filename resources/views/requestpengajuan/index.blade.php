@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Request pengajuan</span>
        <h3 class="page-title">Request pengajuan</h3>
    </div>
</div>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Divisi</th>
            <th>Jumlah yang dibutuhkan</th>
            <th>Sebab pengajuan</th>
          
            <th>Pembukaan</th>
            <th>Penutupan</th>
            <th>Pihak bertanggung jawab</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($requestpengajuan_show as $show_data)
        <tr>
            <td>{{$show_data->divisi}}</td>
            <td>{{$show_data->jumlah}}</td>
            <td>{{$show_data->sebab_pengajuan}}</td>
            <td>{{$show_data->pembukaan_rek}}</td>
            <td>{{$show_data->penutupan_rek}}</td>
            <td>{{$show_data->pihak_bertanggungjwb}}</td>
            
            <td width="15%">
                <div class="action">
                    <ul>
                        <li><a href="{{route('requestpengajuan.edit',[$show_data->id])}}" class="btn btn-primary">Edit</a></li>
                        <li>
                        
                            <form action="{{route('requestpengajuan.destroy',[$show_data->id])}}" method="POST">
                                <input type="hidden" name="_method" value="Delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="Delete">
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
        <th>Divisi</th>
        <th>Jumlah yang dibutuhkan</th>
            <th>Sebab pengajuan</th>
            
            <th>Pembukaan</th>
            <th>Penutupan</th>
            <th>Pihak bertanggung jawab</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
<div class="row">
    <div class="col-md-8">
      
    </div>
    <div class="col-md-4">
    <div class="button-box mt-2">
        <a href="{{route('requestpengajuan.create')}}" class="btn btn-primary"> Tambah data</a>
        </div>
    </div>
</div>
@endsection
