@extends('public.app')

@section('images')
<img src="img/slider2.png" class="d-block w-100" alt="...">
@endsection

@section('page')
<div class="container-fluid">
    <div class="pt-4 pl-5 col-8">
        <h1><b>LOKASI</b></h1>
        <hr class="bg-dark">
        <div id="map-container-google" class="z-depth-1-half map-container shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.5109584385423!2d117.00748241495205!3d-0.7111952994811508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df69a5d9cf23693%3A0x413d3c787c5bf679!2sKHDTK%20Hutan%20Diklat%20Loa%20Haur%2C%20BDLHK%20Samarinda!5e0!3m2!1sen!2sid!4v1582707597295!5m2!1sen!2sid" frameborder="0" style="border: 0;" allowfullscreen></iframe>
        </div>
        <p class="text-justify mt-xl-1">
            Letak KHDTK Samboja berada di dua kabupaten, yaitu Kabupaten Kutai Kartanegara dan Kabupaten Penajam Paser Utara, provinsi Kalimantan Timur. Areal yang termasuk di kabupaten Kutai Kartanegara meliputi Kelurahan Sungai Merdeka, Kecamatan Samboja. Sedangkan areal yang termasuk dalam wilayah Kabupaten Penajam Paser Utara adalah Desa Semoi Dua, Kecamatan Sepaku.
        </p>
    </div>
</div>

@endsection
