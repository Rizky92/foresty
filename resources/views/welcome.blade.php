@extends('public.app')

@section('tab')
BERANDA - KHDTK Samboja
@endsection

@section('title')
<div class="shadow-lg text-light mb-3" style="background-color: #3a8c41">
    <h2 class="p-4"><b>KHDTK SAMBOJA</b></h2>
</div>
@endsection

@section('images')
@include('public.carousel')
@endsection

@section('page')
<div class="text-justify pb-4">
    <img src="{{ asset('assets/frontend/img/khdtk.png') }}" alt="" class="d-block img-fluid float-left pr-3 w-35">
    {!! $post->deskripsi !!}
</div>
<h1><b>BERITA TERBARU</b></h1>
<hr class="bg-dark">
@include('public.berita.list', $beritas)
@endsection

@section('side')
<div class="embed-responsive embed-responsive-16by9 shadow">
    <video src=" {{ asset('assets/frontend/videos/video.mp4') }}" muted controls autoplay class="embed-responsive-item">KHDTK samboja</video>
</div>

<div class="mt-3 pb-4">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="text-uppercase"><b>Selamat datang pengunjung!</b></h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Total pengunjung unik: {{ views($post)->unique()->count() }}</h5>
            <p class="card-text text-secondary">Pengunjung hari ini:</p>
        </div>
        <div class="card-footer">
            <p class="text-muted"><small>Powered by <a href="https://github.com/cyrildewit/eloquent-viewable" class="text-muted text-decoration-none">Eloquent-Viewable</a></small></p>
        </div>
    </div>
</div>

<div class="card shadow pt-2">
    <div class="card-header">
        <h4>PETA KHDTK SAMBOJA</h4>
    </div>
    <div class="card-body" style="transform: rotate(0)">
        <img src="{{ asset('assets/frontend/img/samboja3.png') }}" alt="" class="img-fluid">
        <a href="#mapModal" class="stretched-link text-decoration-none text-muted text-center d-inline" data-toggle="modal" data-target="#mapModal">Klik untuk perbesar</a>
    </div>
</div>

<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Map Samboja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card modal-body shadow">
                <img src="{{ asset('assets/frontend/img/samboja3.png') }}" alt="" class="d-block img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection
