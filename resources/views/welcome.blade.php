@extends('public.app')

@section('images')
@include('public.carousel')
{{-- @include('public.video') --}}
@endsection

@section('page')
<div class="shadow-lg text-light" style="background-color: #3a8c41">
    <h2 class="p-4"><b>SELAMAT DATANG...</b></h2>
</div>
<div class="row">
    <div class="col">

    </div>
    <div class="col">
        <p>KHDTK Litbang Kehutanan adalah kawasan hutan yang ditetapkan oleh Menteri untuk penelitian dan pengembangan kehutanan guna peningkatan pengurusan hutan dan peningkatan nilai tambah hutan serta hasil hutan.</p>

        <p>Kawasan Hutan Dengan Tujuan Khusus yang selanjutnya disingkat KHDTK adalah kawasan hutan yang secara khusus diperuntukkan untuk kepentingan penelitian dan pengembangan kehutanan, pendidikan dan pelatihan kehutanan serta religi dan budaya.</p>

        <p>Pengelolaan KHDTK adalah sistem pengelolaan hutan lestari, komprehensif, mandiri dan terpadu yang melibatkan berbagi disiplin keilmuan untuk tujuan penelitian dan pengembangan kehutanan, pendidikan dan pelatihan kehutanan, serta religi dan budaya.</p>
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
