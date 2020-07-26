@extends('public.app')

@section('tab')
{{ $flora->nama }} - KHDTK Samboja
@endsection

@section('title')
<h1><b class="text-uppercase">{{ $flora->nama }}</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
    <div class="row">
        <div class="col-4">
            <img src="{{ asset($flora->img_path) }}" alt="" class="img-fluid align-items-center my-auto pr-3">
        </div>
        <div class="col">
            <div class="row">
                <label for="nama" class="col-sm-3">Nama:</label>
                <p id="nama">{{ $flora->nama }}</p>
            </div>
            <div class="row">
                <label for="khasiat" class="col-sm-3">Khasiat:</label>
                <p id="khasiat">@if (!empty($flora->khasiat))
                    {{ $flora->khasiat }}
                @else
                    -
                @endif</p>
            </div>
            <div class="row">
                <label for="musim" class="col-sm-3">Musim:</label>
                <p id="musim">@if (!empty($flora->musim))
                    {{ $flora->musim }}
                @else
                    -
                @endif</p>
            </div>
            <div class="row">
                <label for="habitat" class="col-sm-3">Habitat:</label>
                <p id="habitat">@if (!empty($flora->habitat))
                    {{ $flora->habitat }}
                @else
                    -
                @endif</p>
            </div>
            <div class="row">
                <label for="lokasi" class="col-sm-3">Lokasi:</label>
                <p id="lokasi">@if (!empty($flora->lokasi))
                    {{ $flora->lokasi }}
                @else
                    -
                @endif</p>
            </div>
            <div class="row">
                <p id="deskripsi" class="ml-3 pt-3 text-justify">@if (!empty($flora->deskripsi))
                    {{ $flora->deskripsi }}
                @else
                    <i>Tidak ada deskripsi mengenai tumbuhan ini</i>
                @endif</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="text-secondary text-right">
                @if (!empty($flora->updated_at) && $flora->updated_at > $flora->created_at)
                    <i>Terakhir update pada tanggal {{ $flora->updated_at->format('j F Y') }}</i>
                @else
                    <i>Ditambahkan pada tanggal {{ $flora->created_at->format('j F Y') }}</i>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('side')

@endsection
