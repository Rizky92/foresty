@extends('public.app')

@section('images')
<img src="{{ asset('assets/frontend/img/header4.png') }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
    <h1><b>{{ $herbarium->latin }}</b></h1>
    <hr class="bg-dark">
    <div class="row">
        <div class="col-4">
            <img src="{{ asset($herbarium->img_path) }}" alt="" class="img-fluid align-items-center">
        </div>
        <div class="col">
            <div class="row">
                <p>Nama:</p>
            </div>
            <div class="row">
                <p>Latin:</p>
            </div>
            <div class="row">
                <p>Deskripsi:</p>
            </div>
            <div class="row">
                <p>Khasiat:</p>
            </div>
            <div class="row">
                <p>Musim:</p>
            </div>
            <div class="row">
                <p>Habitat:</p>
            </div>
            <div class="row">
                <p>Lokasi:</p>
            </div>
            <div class="row">
                <p>Family:</p>
            </div>
            <div class="row">
                <p>Treetaxa:</p>
            </div>
            <div class="row">
                <p>Collector:</p>
            </div>
            <div class="row">
                <p>Collected date:</p>
            </div>
            <div class="row">
                <p>Number:</p>
            </div>
            <div class="row">
                <p>Prefix:</p>
            </div>
            <div class="row">
                <p>Gazetteer:</p>
            </div>
            <div class="row">
                <p>Minore Area:</p>
            </div>
            <div class="row">
                <p>Majore Area:</p>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <p>{{ $herbarium->latin }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->family->nama }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->treetaxa->nama }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->collector }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->collected_date }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->number }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->prefix }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->gazetteer->nama }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->minoreArea->nama }}</p>
            </div>
            <div class="row">
                <p>{{ $herbarium->majoreArea->nama }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('side')

@endsection
