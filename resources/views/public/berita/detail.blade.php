@extends('public.app')

@section('tab')
{{ $berita->judul }} - KHDTK Samboja
@endsection

@section('title')
<h1><b>{{ $berita->judul }}</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->image->img_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="text-justify">
    <img src="{{ $galleries->first()->img_path }}" class="d-block img-fluid w-100 pb-3 pt-2" alt="...">
    {!! $berita->deskripsi !!}
</div>
<div class="text-muted">
    <p class="text-right pt-2"><i>
        Dilihat {{ views($berita)->count() }} kali. <br>
    @if (!empty($berita->updated_at) && $berita->updated_at > $berita->created_at)
        Terakhir update oleh Admin pada tanggal {{ $berita->updated_at->format('j F Y') }}
    @else
        Diposting oleh Admin pada tanggal {{ $berita->created_at->format('j F Y') }}
    @endif
    </i></p>
</div>
@endsection

@section('side')

<h4 class="text-center"><b>Galeri</b></h4>
<hr class="bg-info">
<div class="card-group mt-2">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($galleries->slice(0, 6) as $item)
        <div class="col mx-auto mb-4">
            <div class="card shadow">
                <img src="{{ $item->img_path }}" class="card-img-top img-fluid" alt="..." style="object-fit: cover;">
            </div>
        </div>
        @endforeach
    </div>
</div>

<a href=" {{ route('public.berita.detail.gallery', $berita->slug) }}" class="btn btn-primary text-uppercase d-flex justify-content-center">Lihat Semua</a>

@endsection
