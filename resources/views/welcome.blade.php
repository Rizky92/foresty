@extends('public.app')

@section('images')
@include('public.carousel')
{{-- @include('public.video') --}}
@endsection

@section('page')
<div class="shadow-lg text-light" style="background-color: #3a8c41">
    <h2 class="p-4"><b>SELAMAT DATANG...</b></h2>
</div>
<div class="row pb-4">
    <div class="col-5">
        <img src="{{ asset('assets/frontend/img/khdtk.png') }}" alt="" class="img-fluid">
    </div>
    <div class="col text-justify">
        <p>Kawasan Hutan Dengan Tujuan Khusus (KHDTK) Samboja merupakan kawasan hutan konservasi yang ditunjuk menjadi lokasi kegiatan penelitian dan pengembangan oleh Menteri Lingkungan Hidup dan Kehutanan.</p>
        <p>Hutan ini dikelola oleh Balai Penelitian dan Pengembangan Teknologi Konservasi Sumber Daya Alam (Balitek KSDA) Samboja, Badan Litbang dan Inovasi Kementerian Lingkungan Hidup dan Kehutanan.</p>
        <p>Selain untuk penelitian dan pengembangan, pengelolaan KHDTK dilakukan untuk menjaga kelestarian flora dan fauna di dalamnya, menjamin keberlangsungan fungsi kawasan hutan sebagai pengatur tata air DAS Merdeka dan DAS Semoi, serta fungsi wisata alam dan pendidikan</p>
    </div>
</div>
<img src="{{ asset('assets/frontend/img/samboja3.png') }}" alt="" class="img-fluid">
@endsection

@section('side')
<div class="embed-responsive embed-responsive-16by9 shadow">
    <video src=" {{ asset('assets/frontend/videos/video.mp4') }}" muted controls autoplay class="embed-responsive-item">KHDTK samboja</video>
</div>

<div class="mt-3">
    <div class="card shadow">
        <div class="card-header">
            <h5 class="text-success"><b>Selamat datang pengunjung!</b></h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Total pengunjung: 50</h5>
            <p class="card-text text-secondary">Pengunjung hari ini: 5</p>
        </div>
        <div class="card-footer">
            <p class="text-muted"><small>Powered by <a href="https://github.com/cyrildewit/eloquent-viewable" class="text-muted text-decoration-none">Eloquent-Viewable</a></small></p>
        </div>
    </div>
</div>
@endsection
