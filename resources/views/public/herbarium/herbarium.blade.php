@extends('public.app')

@section('images')
<img src="img/slider3.png" class="d-block w-100" alt="...">
@endsection

@section('page')
<h1><b>HERBARIUM</b></h1>
<hr class="bg-dark">
<div id="herbarium_posts">
    <div class="card-group">
        <div class="card mx-2 shadow">
            <img src="https://picsum.photos/200" class="card-img-top h-50 text-center img-thumbnail" alt="...">
            <div class="card-body">
                <h5 class="card-title">Judul</h5>
                <p class="card-text">Deskripsi</p>
                <a href="" class="btn btn-primary btn-sm stretched-link">detail</a>
            </div>
        </div>
        <div class="card mx-2 shadow">
            <img src="https://picsum.photos/200" class="card-img-top h-50 text-center img-thumbnail" alt="...">
            <div class="card-body">
                <h5 class="card-title">Judul</h5>
                <p class="card-text">Deskripsi</p>
                <a href="" class="btn btn-primary btn-sm stretched-link">detail</a>
            </div>
        </div>
        <div class="card mx-2 shadow">
            <img src="https://picsum.photos/200" class="card-img-top h-50 text-center img-thumbnail" alt="...">
            <div class="card-body">
                <h5 class="card-title">Judul</h5>
                <p class="card-text">Deskripsi</p>
                <a href="" class="btn btn-primary btn-sm stretched-link">detail</a>
            </div>
        </div>
        <div class="card mx-2 shadow">
            <img src="https://picsum.photos/200" class="card-img-top h-50 text-center img-thumbnail" alt="...">
            <div class="card-body">
                <h5 class="card-title">Judul</h5>
                <p class="card-text">Deskripsi</p>
                <a href="" class="btn btn-primary btn-sm stretched-link">detail</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('side')
<form class="form-inline col-5 d-inline w-50">
    <div class="input-group shadow">
        <input class="form-control" type="search" placeholder="Cari..." aria-label="Cari">
        <div class="input-group-append shadow-sm">
            <button class="btn btn-success border-0" type="submit"><i class="material-icons">&#xE8B6;</i></button>
        </div>
    </div>
</form>

@endsection
