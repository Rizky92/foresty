@extends('public.app')

@section('images')
@include('public.carousel')
{{-- @include('public.video') --}}
@endsection

@section('page')
<div class="shadow-lg text-light" style="background-color: #3a8c41">
    <h2 class="p-4"><b>SELAMAT DATANG...</b></h2>
</div>
<p>(Balai penelitian dan pengembangan teknologi konservasi sumber daya alam)
    deskripsi
</p>
<img src="{{ asset('assets/frontend/img/samboja3.png') }}" alt="" class="img-fluid">
@endsection

@section('side')
<div class="embed-responsive embed-responsive-16by9 shadow">
    <video src=" {{ asset('assets/frontend/videos/video.mp4') }}" muted controls autoplay class="embed-responsive-item">KHDTK samboja</video>
</div>

<div class="mt-3">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Insert total views here</h5>
            <p class="card-text">Insert today counter here.</p>
        </div>
        <div class="card-footer">
            <p class="text-muted">powered by some counter plugin</p>
        </div>
    </div>
</div>
@endsection
