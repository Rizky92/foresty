@extends('public.app')

@section('tab')
FLORA - KHDTK Samboja
@endsection

@section('title')
<h1><b>FLORA</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="text-justify">
    {!! $post->deskripsi !!}
    <p>Adapun macam-macam flora yang terdapat dalam KHDTK Samboja diantaranya:</p>
</div>
@include('public.flora.list', $floras)
@endsection

@section('side')

<form class="form-inline col-5 d-inline">
    <div class="input-group shadow">
        <input class="form-control" type="search" placeholder="Cari..." aria-label="Cari">
        <div class="input-group-append shadow-sm">
            <button class="btn btn-success border-0" type="submit"><i class="material-icons">&#xE8B6;</i></button>
        </div>
    </div>
</form>

@if ($galleries->isNotEmpty())
@include('public.gallery.side', $galleries)
@endif

@endsection
