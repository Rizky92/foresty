@extends('public.app')

@section('page')
@include('public.carousel')
<div class="container-fluid">
    <div id="herbarium_header">
        <div class="pt-4 pl-5 col-8">
            <div class="shadow-lg text-light" style="background-color: #3a8c41">
                <h2 class="p-4"><b>SELAMAT DATANG...</b></h2>
            </div>
            <p>(Balai penelitian dan pengembangan teknologi konservasi sumber daya alam)
                deskripsi
            </p>
        </div>
    </div>
    <div id="herbarium_posts" class="px-5">
        <div class="card-group">
            <div class="card mx-2">
                <img src="https://picsum.photos/200" class="card-img-top h-50 text-center " alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Deskripsi</p>
                </div>
            </div>
            <div class="card mx-2">
                <img src="https://picsum.photos/200" class="card-img-top h-50 text-center " alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Deskripsi</p>
                </div>
            </div>
            <div class="card mx-2">
                <img src="https://picsum.photos/200" class="card-img-top h-50 text-center " alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Deskripsi</p>
                </div>
            </div>
            <div class="card mx-2">
                <img src="https://picsum.photos/200" class="card-img-top h-50 text-center " alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Deskripsi</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
