@extends('public.app')

@section('tab')
HERBARIUM - KHDTK Samboja
@endsection

@section('title')
<h1><b>HERBARIUM</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
@include('public.herbarium.list')
@endsection

@section('side')
<form class="form-inline col-5 d-inline w-50 pb-4">
    <div class="input-group shadow">
        <input class="form-control" type="search" placeholder="Cari..." aria-label="Cari">
        <div class="input-group-append shadow-sm">
            <button class="btn btn-success border-0" type="submit"><i class="material-icons">&#xE8B6;</i></button>
        </div>
    </div>
</form>

@if (!empty($galleries))
@include('public.gallery.side', $galleries)
@endif

@endsection
