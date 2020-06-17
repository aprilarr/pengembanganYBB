@extends('layout/footer')
@section('markhalaman')
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>HUBUNGI KAMI</h2>
            </div>
        </div>
    </div>
</section>
@endsection
@section('container')
    
    <section class="probootstrap-section probootstrap-section-sm">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="row probootstrap-gutter0">
            <div class="col-md-4" id="probootstrap-sidebar">
                <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                <h3>Halaman</h3>
                <ul class="probootstrap-side-menu">
                    
                    <li><a href="/">Home</a></li>
                    <li><a href="/ekskul">Ekstrakulikuler</a></li>
                    <li><a href="/pengajar">Tenaga Kependidikan</a></li>
                    <li><a href="/galeri">Galeri</a></li>
                    <li><a href="/profil">Profil Sekolah</a></li>
                    <li class="active"><a>Kontak</a></li>
                </ul>
                </div>
            </div>

            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                <h2>Hubungi Kami Dengan:</h2>
                <p>semua kritik dan saran anda dapat anda kirim melalui pengisian formulir dibawah ini. </p>
                
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
                <form action="{{url('kontak/send')}}" method="post" class="probootstrap-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection
@extends('layout/header')