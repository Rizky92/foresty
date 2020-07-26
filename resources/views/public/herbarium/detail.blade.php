@extends('public.app')

@section('tab')
{{ $herbarium->latin }} - KHDTK Samboja
@endsection

@section('title')
<h1><b>{{ $herbarium->latin }}</b></h1>
<hr class="bg-dark">
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
    <div class="row">
        <div class="col-4">
            <img src="{{ asset($herbarium->img_path) }}" alt="" class="img-fluid align-items-center my-auto pr-3">
        </div>
        <div class="col">
            <div class="row">
                <label for="nama" class="col-sm-3">Nama:</label>
                <p id="nama">{{ $herbarium->flora->nama }}</p>
            </div>
            <div class="row">
                <label for="latin" class="col-sm-3">Nama Latin:</label>
                <p id="latin">{{ $herbarium->latin }}</p>
            </div>
            <div class="row">
                <label for="khasiat" class="col-sm-3">Khasiat:</label>
                <p id="khasiat">{{ $herbarium->flora->khasiat }}</p>
            </div>
            <div class="row">
                <label for="musim" class="col-sm-3">Musim:</label>
                <p id="musim">{{ $herbarium->flora->musim }}</p>
            </div>
            <div class="row">
                <label for="habitat" class="col-sm-3">Habitat:</label>
                <p id="habitat">{{ $herbarium->flora->habitat }}</p>
            </div>
            <div class="row">
                <label for="collector" class="col-sm-3">Collector:</label>
                <p id="collector">{{ $herbarium->collector }}</p>
            </div>
            <div class="row">
                <label for="addcoll" class="col-sm-3">Add Coll:</label>
                <p id="addcoll">{{ $herbarium->add_coll }}</p>
            </div>
            <div class="row">
                <label for="collected_date" class="col-sm-3">Collected Date:</label>
                <p id="collected_date">{{ $herbarium->collected_date->format('j F Y') }}</p>
            </div>
            <div class="row">
                <label for="number" class="col-sm-3">Number:</label>
                <p id="number">{{ $herbarium->number }}</p>
            </div>
            <div class="row">
                <label for="prefix" class="col-sm-3">Prefix:</label>
                <p id="prefix">{{ $herbarium->prefix }}</p>
            </div>
            <div class="row">
                <label for="locality_note" class="col-sm-3">Locality Note:</label>
                <p id="locality_note">{{ $herbarium->locality_note }}</p>
            </div>
            <div class="row">
                <label for="country" class="col-sm-3">Country:</label>
                <p id="country">{{ $herbarium->country->nama }}</p>
            </div>
            <div class="row">
                <label for="family" class="col-sm-3">Family:</label>
                <p id="family">{{ $herbarium->family->nama }}</p>
            </div>
            <div class="row">
                <label for="gazetteer" class="col-sm-3">Gazetteer:</label>
                <p id="gazetteer">{{ $herbarium->gazetteer->nama }}</p>
            </div>
            <div class="row">
                <label for="majore_area" class="col-sm-3">Majore Area:</label>
                <p id="majore_area">{{ $herbarium->majoreArea->nama }}</p>
            </div>
            <div class="row">
                <label for="minore_area" class="col-sm-3">Minore Area:</label>
                <p id="minore_area">{{ $herbarium->minoreArea->nama }}</p>
            </div>
            <div class="row">
                <label for="treetaxa" class="col-sm-3">Treetaxa:</label>
                <p id="treetaxa">{{ $herbarium->treetaxa->nama }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('side')

@endsection
