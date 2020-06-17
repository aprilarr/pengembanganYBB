@extends('layout/footer')
@section('markhalaman')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>{{$nama}}</h2>
            </div>
        </div>
    </div>
@endsection
@section('container')
<div class="media mt-5">
    <img src="enlight/img/organigram.png" class="align-self-center mr-3" alt="...">
    <div class="media-body">
    </div>
</div>
{{-- <div class="container mt-8">
<img src="enlight/img/organigram.png" class="img-fluid-center" alt="Responsive image">
</div> --}}
<br>
<br>
@endsection
@extends('layout/header')