@extends('index')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">Lamaran Diterima</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('send/email-test-diterima') }}">
                        @csrf
                        
                        @if (Session::has("success"))
                            <div class="alert alert-success">
                                <b>Successfull</b>, your email sent.
                            </div>
                        @endif

                        <div class="form-group row">
                                <label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>
    
                                <div class="col-md-6">
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="CV. Klik Chat" required autocomplete="subject" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="subject" class="col-md-4 col-form-label text-md-right">Email</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="message" class="col-md-4 col-form-label text-md-right">Message</label>
    
                                <div class="col-md-6">
                                    <textarea class="form-control" name="message" id="" cols="30" rows="5">Selamat Anda Telah lolos seleksi Coding pada lowongan yang anda daftarkan,segera datang untuk melanjutkan test selanjutnya pada :
    Tanggal :
    Pukul   :
    Tempat  :
    
    See you guys !
                                    </textarea>
                            </div>
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">Send Email</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
