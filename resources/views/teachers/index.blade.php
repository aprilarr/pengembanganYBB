@extends('layout/footer')
@section('markhalaman')
    <section class="probootstrap-section probootstrap-section-colored" >
    <div class="container">
        <div class="row" >
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>Selamat Datang Di Web SMP YBB</h2>
            </div>
        </div>
    </div>
</section>
@endsection
@section('container')
    <section class="probootstrap-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="probootstrap-flex-block">
            <div class="probootstrap-text probootstrap-animate">
                <h3>Pendidik dan Tenaga Kependidikan SMP Yayasan Budi Bakti</h3>
                <p>Dengan adanya pendidikan dan tenaga kependidikan yang berpendidikan luhur, berakhlak mulia dan mempunyai jiwa sosial yang baik
                    akan memudahkan untuk membimbing peserta didik kearah yang baik agar menjadi kebanggaan bagi bangsa ini. 
                </p>
                <a href="/teachers/create" class="btn btn-success">Tambah Data Guru</a>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(enlight/img/guru.jpg)">
                <a href="enlight/img/guru.jpg" class="btn-video popup-vimeo"></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <center> <a href="" class="btn btn-ghost" data-toggle="modal" 
                data-target="#modalguru">Lihat Dalam Tabel</a></center>
    <section class="probootstrap-section">
    <div class="container">
        @foreach ($teachers as $teacher)
        <div class="col">
        <div class="col-md-auto col-sm-6">
            <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
                <img src="enlight/img/guru/{{$teacher->gambar}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            </figure>
            <div class="text">
                <h3>{{$teacher->nama}}</h3>
                <td>{{$teacher->jabatan}}</td>
                <ul class="probootstrap-footer-social">
                <li class="facebook"><a href="{{$teacher->fb}}"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="{{$teacher->ig}}"><i class="icon-instagram2"></i></a></li>
                </ul>
            <a href="/teachers/{{$teacher->id}}" class="btn btn-info">Detail</a>
            {{-- <a id="detail" href="" class="btn btn-ghost" 
                data-toggle="modal" data-target="#modalguru"
                data-id="{{$teacher->id}}"
                data-nuptk="{{$teacher->nuptk}}"
                data-nama="{{$teacher->nama}}"
                data-ttl="{{$teacher->ttl}}"
                data-alamat="{{$teacher->alamat}}"
                data-tlp="{{$teacher->tlp}}"
                data-email="{{$teacher->email}}"
                data-jabatan="{{$teacher->jabatan}}"
                data-pendididkan="{{$teacher->pendidikan}}">
                <i class="fa fa-eye"></i>Detail  --}}
            </a>
            </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    </section>
    

<!-- Modal -->
<div class="modal fade" id="modalguru" tabindex="-1" role="dialog" aria-labelledby="modalguruTitle" aria-hidden="true">
  <div class="modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalguruTitle">Profil Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <table class="table table-bordered no-margin">
                        <thead>
                            <td>NUPTK</td>
                            <td>Nama</td>
                            <td>TTL</td>
                            <td>Alamat</td>
                            <td>Tlp</td>
                            <td>Email</td>
                            <td>Jabatan</td>
                            <td>Pendidikan</td>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                
                            <tr>
                                <td>{{$teacher->nuptk}}</td>
                                <td>{{$teacher->nama}}</td>
                                <td>{{$teacher->ttl}}</td>
                                <td>{{$teacher->alamat}}</td>
                                <td>{{$teacher->tlp}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->jabatan}}</td>
                                <td>{{$teacher->pendidikan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


{{-- <script src="enlight/js/scripts.min.js"></script>
<script src="enlight/js/main.min.js"></script>
<script src="enlight/js/custom.js"></script>
<script src="enlight/js/vendor/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function){
    $(document).on('click', '#detail', function()){
        var id = $(this).data('id');
        var nuptk = $(this).data('nuptk');
        var nama = $(this).data('nama');
        var ttl = $(this).data('ttl');
        var alamat = $(this).data('alamat');
        var tlp = $(this).data('tlp');
        var email = $(this).data('email');
        var jabatan = $(this).data('jabatan');
        var pendidikan = $(this).data('pendidikan');
        $('.modal-body #show #nuptk').val(nuptk);
        $('.modal-body #show #nama').val(nama);
        $('.modal-body #show #ttl').val(ttl);
        $('.modal-body #show #alamat').val(alamat);
        $('.modal-body #show #tlp').val(tlp);
        $('.modal-body #show #email').val(email);
        $('.modal-body #show #jabatan').val(jabatan);
        $('.modal-body #show #pendidikan').val(pendidikan);
        })
})
</script> --}}


@endsection
@extends('layout/header')



{{--isi modal card--}}
{{-- <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$teacher->nama}}</h5>
                        <p class="card-text"> {{$teacher->nuptk}}</p>
                        <p class="card-text"> {{$teacher->ttl}}</p>
                        <p class="card-text"> {{$teacher->alamat}}</p>
                        <p class="card-text"> {{$teacher->tlp}}</p>
                        <p class="card-text"> {{$teacher->email}}</p>
                        <p class="card-text"> {{$teacher->jabatan}}</p>
                        <p class="card-text"> {{$teacher->pendidikan}}</p>

                    </div>
                    </div> --}}

                   