@extends('public.app')

@section('tab')
Galeri - KHDTK Samboja
@endsection

@section('title')
<h1><b>Galeri {{ $post->judul }}</b></h1>
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
    @include('public.gallery.list', $galleries)
</div>
@endsection

@section('side')

@endsection
