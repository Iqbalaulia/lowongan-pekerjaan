<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Berkas</title>
    @include('include.header-css')

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <br>
            <div class="card">
                <h3 class="card-header text-center">Upload CV</h3>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ action('FileController@store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <input class="form-control form-control-lg mb-3" type="file" name="file[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-sm btn-accent ml-auto float-right">Upload</button>
                        <!-- <a href="{{ action('FileController@index') }}" class="btn btn-success">Back</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.vendor-js')

</body>
</html>