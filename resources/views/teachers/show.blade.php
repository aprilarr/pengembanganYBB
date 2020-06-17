@extends('layout/footer')
@section('container')    

<section class="probootstrap-section">
<div class="container">
    <div class="col">
        <div class="col-md-auto">
            <div class="probootstrap-teacher text-center probootstrap-animate">
            <a href="" class="badge badge-info my-3">Edit</a>
            <a href="" class="badge badge-danger align-items-end my-3">Hapus</a>
            <figure class="media">
                <img src="/enlight/img/guru/{{$teacher->gambar}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            </figure>
            <div class="text">
                <h3>Detail Profil</h3>
                <td>{{$teacher->nuptk}}</td><br>
                <td>{{$teacher->nama}}</td><br>
                <td>{{$teacher->ttl}}</td><br>
                <td>{{$teacher->alamat}}</td><br>
                <td>{{$teacher->tlp}}</td><br>
                <td>{{$teacher->email}}</td><br>
                <td>{{$teacher->jabatan}}</td><br>
                <td>{{$teacher->pendidikan}}</td><br>
            </div>
            <a href="/teachers" class="btn btn-success my-3">Kembali</a>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
@extends('layout/header')
<script src="/enlight/js/scripts.min.js"></script>
<script src="/enlight/js/main.min.js"></script>
<script src="/enlightjs/custom.js"></script>