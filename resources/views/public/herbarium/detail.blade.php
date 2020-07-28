@extends('public.app')

@section('tab')
{{ $herbarium->latin }} - KHDTK Samboja
@endsection

@section('title')
<h1><b>{{ $herbarium->latin }}</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
@if (!is_null($post->image))
<img src="{{ $post->image->img_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endif
@endsection

@section('page')
<div class="row">
    <div class="col-4">
        @if (!is_null($herbarium->image))
        <img src="{{ asset($herbarium->image->img_path) }}" alt="" class="img-fluid align-items-center my-auto pr-3">
        @endif
    </div>
    <div class="col">
        <table class="table table-striped table-active table-sm">
            <tbody>
                <tr>
                    <th scope="row">Nama:</th>
                    <td>{{ $herbarium->flora->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Latin:</th>
                    <td>{{ $herbarium->latin }}</td>
                </tr>
                <tr>
                    <th scope="row">Khasiat:</th>
                    <td>{{ $herbarium->flora->khasiat }}</td>
                </tr>
                <tr>
                    <th scope="row">Musim:</th>
                    <td>{{ $herbarium->flora->musim }}</td>
                </tr>
                <tr>
                    <th scope="row">Habitat:</th>
                    <td>{{ $herbarium->flora->habitat }}</td>
                </tr>
                <tr>
                    <th scope="row">Lokasi:</th>
                    <td>{{ $herbarium->flora->lokasi }}</td>
                </tr>
                <tr>
                    <th scope="row">Collector:</th>
                    <td>{{ $herbarium->collector }}</td>
                </tr>
                <tr>
                    <th scope="row">Collected date:</th>
                    <td>{{ $herbarium->collected_date->format('j F Y') }}</td>
                </tr>
                <tr>
                    <th scope="row">AddColl:</th>
                    <td>{{ $herbarium->add_coll }}</td>
                </tr>
                <tr>
                    <th scope="row">Number:</th>
                    <td>{{ $herbarium->number }}</td>
                </tr>
                <tr>
                    <th scope="row">Prefix:</th>
                    <td>{{ $herbarium->prefix }}</td>
                </tr>
                <tr>
                    <th scope="row">Locality note:</th>
                    <td>{{ $herbarium->locality_note }}</td>
                </tr>
                <tr>
                    <th scope="row">Family:</th>
                    <td>{{ $herbarium->family->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Treetaxa:</th>
                    <td>{{ $herbarium->treetaxa->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Gazetteer:</th>
                    <td>{{ $herbarium->gazetteer->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Minore Area:</th>
                    <td>{{ $herbarium->minoreArea->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Majore Area:</th>
                    <td>{{ $herbarium->majoreArea->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Country:</th>
                    <td>{{ $herbarium->country->nama }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-secondary text-right">
            Dilihat {{ views($herbarium)->count() }} kali. <br>
            @if (!empty($herbarium->updated_at) && $herbarium->updated_at > $herbarium->created_at)
                <i>Terakhir update pada tanggal {{ $herbarium->updated_at->format('j F Y') }}</i>
            @else
                <i>Ditambahkan pada tanggal {{ $herbarium->created_at->format('j F Y') }}</i>
            @endif
        </div>
    </div>
</div>
@endsection

@section('side')
{{ str_replace(['[kiri]', '[kanan]'], '', $herbarium->flora->deskripsi) }}
@endsection
