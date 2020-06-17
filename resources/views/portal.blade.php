@extends('layout/footer')
@section('markhalaman')
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>{{$nama}}</h2>
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
                <div class="text-uppercase probootstrap-uppercase">SMP YBB</div>
                <h3>Portal Berita</h3>
                <p>Berita - berita yang berisikan kegiatan SMP Yayasan Budi Bakti. </p>
                <p><a href="#" class="btn btn-primary">Endroll</a></p>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(enlight/img/portal.jpg)">
                <a href="enlight/img/portal.jpg" class="btn-video popup-vimeo"></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="probootstrap-section">
    <div class="container">

        <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="enlight/img/portal/brosur.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
                <h3>PPDB Online 2020-2021</h3>
                <p>Link Pendaftaran : <a href="https://docs.google.com/forms/d/1KL9FLpYKe2f8_1SSACPJ22aIVoNYUlG2NT4yPZGOuTk/edit">Klik Disini</a></p>
                <p>Konfirmasi Ulang : Setelah melakukan pendaftaran harap melakukan konfirmasi ulang pada kontak dibawah.</p>
                <p>Ibu Anita Mulyani : 085222485877 <br> Ibu Rosi Rosidah : 085795849458 <br> Ibu Restu Dewi : 085721104086</p>
                <span class="probootstrap-date"><i class="icon-calendar"></i>Mei 1, 2020</span>
            </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="enlight/img/portal/kaos.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
                <h3>Desain Baju SMP YBB</h3>
                <p>SMP YBB Telah mengeluarkan desain baru untuk kaos yang akan dipakai pada periode tahun ajaran 2020-2021.</p>
                <span class="probootstrap-date"><i class="icon-calendar"></i>Mei 3, 2020</span>
            </div>
            </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="enlight/img/portal/balon.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
                <h3>PPDB 2019-2020</h3>
                <p>PPDB (Penerimaan Peserta Didik Baru) SMP Yayasan Budi Bakti Sudah dilaksanakan dan disahkan dengan acara pelepasan balon.</p>
                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2019</span>
            </div>
            </a>
        </div>

        <div class="clearfix visible-md-block"></div>
        
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="enlight/img/portal/adha.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
                <h3>Idul Adha 1440 H</h3>
                <p>Di hari Idul Adha 1440H, SMP Yayasan Budi Bakti telah melaksakan qurban dengan total 4 hewan qurban, diantara hewan qurban tersebut adalah 1 ekor sapi dan 3 ekor domba.</p>
                <span class="probootstrap-date"><i class="icon-calendar"></i>Agustus 19, 2019</span>
            </div>
            </a>
        </div>
       
        <div class="clearfix visible-sm-block visible-xs-block"></div>

        </div>
    </div>
</section>
@endsection
@extends('layout/header')