@extends('public.app')

@section('images')
<img src="{{ asset('assets/frontend/img/header4.png') }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
    <h1><b>HASIL PENCARIAN</b></h1>
    <h5 class="text"></h5>
    <hr class="bg-dark">
    <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-4">
                <img src="{{ asset('assets/frontend/img/slider1.jpg') }}" class="card-img" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-4">
                <img src="{{ asset('assets/frontend/img/slider1.jpg') }}" class="card-img" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-4">
                <img src="{{ asset('assets/frontend/img/slider1.jpg') }}" class="card-img" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('side')

@endsection
