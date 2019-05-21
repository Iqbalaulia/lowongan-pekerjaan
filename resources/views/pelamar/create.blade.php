<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Lowongan Pekerjaan</title>
    @include('include.header-css')

</head>

<body>

    <div class="container">
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Mendaftar Lowongan Pekerjaan</span>
                <h3 class="page-title">Mendaftar Lowongan Pekerjaan <b>CV.KLIK CHAT</b></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <form class="kt-form kt-form--label-right" action="{{url('pelamar')}}" method="POST">
                            {{csrf_field()}}

                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input name="nama_lengkap" class="form-control form-control-lg mb-3" type="text"
                                placeholder="Masukan divisi yang hendak melakukan pembukaan pekerjaan">
                            <label for="keahlian">Keahlian</label>
                            <textarea name="keahlian" type="text" class="form-control form-control-lg mb-3"></textarea>
                           
                           
                            <label for="linkedin">LinkedIn</label>
                            <input name="linkedin" class="form-control form-control-lg mb-3" type="text"
                                placeholder="Url your Linkedin">


                            <label for="github">Github</label>
                            <input name="github" class="form-control form-control-lg mb-3" type="text"
                                placeholder="Url your github">


                            <label for="gitlab">Gitlab</label>
                            <input name="gitlab" class="form-control form-control-lg mb-3" type="text"
                                placeholder="Url your Gitlab">

                          
                            <label for="divisi_lamaran">Divisi Lamaran</label>
                            <input name="divisi_lamaran" class="form-control form-control-lg mb-3" type="text"
                                placeholder="Your Post Title">

                            <button type="submit" class="btn btn-sm btn-accent ml-auto float-right">
                                <i class="material-icons">file_copy</i> Daftarkan</button>
                                
                               

                    </div>

                </div>
            </div>
            <!-- / Add New Post Form -->
        </div>


    </div>

    </div>
    </form>
    </div>
    </div>

    @include('include.vendor-js')

</body>

</html>