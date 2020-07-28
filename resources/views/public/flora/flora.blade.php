@extends('public.app')

@section('tab')
Flora - KHDTK Samboja
@endsection

@section('title')
<h1><b>FLORA</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
@if (!is_null($post->image))
<img src="{{ $post->image->img_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endif
@endsection

@section('page')
<div class="text-justify">
    {!! $post->deskripsi !!}
    @include('public.flora.list')
</div>
@endsection

@section('side')

<h4 class="text-center"><b>Galeri</b></h4>
<hr class="bg-info">
<div class="card-group mt-2">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($galleries->slice(0, 6) as $item)
        <div class="col mb-4">
            <div class="card shadow">
                <img src="{{ $item->img_path }}" class="card-img-top img-fluid" alt="{{ $item->judul }}" style="object-fit: cover; max-height: 100px;">
            </div>
        </div>
        @endforeach
    </div>
</div>

<a href=" {{ route('public.flora.gallery') }}" class="btn btn-primary text-uppercase d-flex justify-content-center">Lihat Semua</a>

@endsection
