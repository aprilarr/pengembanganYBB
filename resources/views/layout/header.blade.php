<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SMP Yayasan Budi Bakti Bandung</title>
<meta name="description" content="Free Bootstrap Theme by uicookies.com">
<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="/enlight/css/styles-merged.css">
<link rel="stylesheet" href="/enlight/css/style.min.css">
<link rel="stylesheet" href="/enlight/css/custom.css">

<!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
<![endif]-->
</head>
<body>

<div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
    <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
</div>

<div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->
    
    <div class="probootstrap-header-top">
    <div class="container">
        <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
            <span><i class="icon-location2"></i>Jl. Citepus II No.3, Pajajaran Bandung</span>
            <span><i class="icon-phone2"></i>(022)-60070463</span>
            <span><i class="icon-mail"></i>budi.bakti1980@gmail.com</span>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
            <ul>
            <li><a href="https://www.facebook.com/pages/SMP-YBB-Yayasan-Budi-Bakti-Bandung/586904348096496?ref=br_rs"><i class="icon-facebook2"></i></a></li>
            <li><a href="https://www.instagram.com/budibakti80/?hl=en"><i class="icon-instagram2"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
    <nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
        <div class="btn-more js-btn-more visible-xs">
            <a href="#"><i class="icon-dots-three-vertical "></i></a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" title="SMP YBB">YBB</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li><a href="/ekskul">Ekstrakulikuler</a></li>
            <li><a href="{{ route ('teachers.index') }}">Tenaga Kependidikan</a></li>
            <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Halaman</a>
            <ul class="dropdown-menu">
                <li><a href="/profil">Profil Sekolah</a></li>
                <li><a href="/organigram">Struktur Organisasi</a></li>
                <li><a href="#">Prestasi</a></li>
                <li><a href="/galeri">Galeri</a></li>
            </ul>
            </li>
            <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Terkait</a>
            <ul class="dropdown-menu">
                <li><a href="http://mutu.yayasanbudibaktibdg.sch.id">SPMI SMP YBB</a></li>
            </ul>
            </li>
            <li><a href="/kontak">Kontak</a></li>
        </ul>
        </div>
    </div>
    </nav>

@yield('markhalaman')
@yield('container')


