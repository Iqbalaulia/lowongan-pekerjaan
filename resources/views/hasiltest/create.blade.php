@extends('index')
@section('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Input Data</span>
        <h3 class="page-title">Input Data Test Programming</h3>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
            <div class="card-body">
                <form class="kt-form kt-form--label-right" action="{{url('hasil-test')}}" method="POST"
                    enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="row">

                        <div class="col-md-4">
                                <label for="nama_pelamar">Nama Pelamar</label>
                                <input name="nama_pelamar" class="form-control form-control-lg mb-3" type="text"
                                   >
                        </div>
                        <div class="col-md-4">
                                <label for="hasil">Hasil Test</label>
                                <input name="hasil" type="number"
                                    class="form-control form-control-lg mb-3"/>
                        </div>
                        <div class="col-md-4">

                                <label for="posisi">Posisi</label>
                                <input name="posisi" class="form-control form-control-lg mb-3" type="text">
                        </div>
                       
                       

                    </div>

                    <button type="submit" class="btn btn-sm btn-accent ml-auto float-right">
                        <i class="material-icons">file_copy</i> Publish</button>

            </div>

        </div>
    </div>
    <!-- / Add New Post Form -->
</div>


</div>

</div>
</form>
</div>
<!-- End Content -->
@endsection