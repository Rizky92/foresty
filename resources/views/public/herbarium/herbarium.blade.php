@extends('public.app')

@section('images')
<img src="{{ asset('assets/frontend/img/header4.png') }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
    <h1><b>HERBARIUM</b></h1>
    <hr class="bg-dark">
    <div id="herbarium_posts">
        @foreach ($herbaria as $item)
        <div class="card shadow">
            <div class="row no-gutters">
                <div class="col-3">
                    <img src="{{ $item->img_path }}" class="card-img" alt="..." class="d-block img-fluid img-thumbnail" height="180px" style="object-fit: cover">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->latin }}</h3>
                        <p class="card-text">Lokasi: {{  $item->gazetteer->name }}, {{ $item->minoreArea->name}}, {{$item->majoreArea->name}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('public.herbarium.detail', $item->id) }}" class="stretched-link text-decoration-none text-muted">detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
