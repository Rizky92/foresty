@extends('public.app')

@section('tab')
TEMPAT WISATA - KHDTK Samboja
@endsection

@section('title')
<h1><b>TEMPAT WISATA</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
{!! $post->deskripsi !!}
</div>
@endsection

@section('side')

@if ($galleries->isNotEmpty())
@include('public.gallery.side', $galleries)
@endif

@endsection
