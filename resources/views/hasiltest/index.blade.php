@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Hasil test</span>
        <h3 class="page-title">Hasil test calon karyawan</h3>
    </div>
</div>
<table id="accpengajuan" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>Nama Pelamar tes</th>
            <th>Hasil Test</th>
            <th>Posisi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td width="15%">
                <div class="action">
                    <ul>
                        <li><a href="" class="btn btn-primary">View</a></li>
                        <li>
                        
                            <form action="" method="POST">
                                <input type="hidden" name="_method" value="Delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="Tolak">
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>Nama Pelamar</th>
            <th>Hasil Test</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

@endsection
