@extends('public.app')

@section('tab')
{{ $berita->judul }} - KHDTK Samboja
@endsection

@section('title')
<h1><b>{{ $berita->judul }}</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="header">
@endsection

@section('page')
<img src="{{ $berita->img_path }}" class="d-block img-fluid w-100 mb-2" alt="header">
<i class="text-muted">A caption for the above image.</i>
<div class="text-justify pt-4">
    {!! $berita->deskripsi !!}
</div>
@endsection

@section('side')
<h5>Berita terbaru</h5>
<hr class="bg-dark">
@endsection
