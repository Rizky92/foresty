@extends('public.app')

@section('tab')
PROFIL - KHDTK Samboja
@endsection

@section('images')
<img src="{{ $post->header_path }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<button class="btn col text-left pt-4" type="button" data-toggle="collapse" data-target="#aksesibilitas" aria-expanded="false" aria-controls="aksesibilitas">
    <h1><b>AKSESIBILITAS</b></h1>
    <hr class="bg-dark">
</button>
<div class="collapse" id="aksesibilitas">
    <div class="pl-2 text-justify">
        <p>Aksebilitas untuk mencapai areal Hutan Rintis Wartono Kadri di KHDTK Samboja asalah sebagai berikut:</p>
        <ul>
            <li>
                <p>Balikpapan-Balitek KSDA Samboja, berjarak 38 km dapat ditempuh dengan menggunakan kendaraan pribadi, taxi (dari Bandara Sepinggan), atau bus dan angkot warna kuning no 42 (dari Terminal Batu Ampar).</p>
            </li>
            <li>
                <p>Samarinda-Balitek KSDA Samboja, berjarak 77 km dapat ditempuh dengan  menggunakan mobil pribadi, txi, atau bus (dari Terminal Sungai Kunjang).</p>
            </li>
            <li>
                <p>Balitek KSDA Samboja-Rintis Wartono Kadri, berjarak 4,5 km jalan kearah Desa Semoi-Dua dapat ditempuh dengan kendaraan pribadi (mobil dan motor) atau kendaraan umum.</p>
            </li>
        </ul>
    </div>
</div>
<button class="btn col text-left pt-4" type="button" data-toggle="collapse" data-target="#lokasi" aria-expanded="false" aria-controls="lokasi">
    <h1><b>LOKASI</b></h1>
    <hr class="bg-dark">
</button>
<div class="collapse" id="lokasi">
    <div class="pl-2 text-justify">
        <div id="map-container-google" class="z-depth-1-half map-container shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2108364785645!2d116.99333371432391!3d-0.9998479356617427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6afc875959ba3%3A0x5db54837ece08fdd!2sPuncak%20KHDTK%20Samboja!5e0!3m2!1sen!2sid!4v1595125437846!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
        <p class="text-justify pt-xl-2">
            Letak KHDTK Samboja berada di dua kabupaten, yaitu Kabupaten Kutai Kartanegara dan Kabupaten Penajam Paser Utara, provinsi Kalimantan Timur. Areal yang termasuk di kabupaten Kutai Kartanegara meliputi Kelurahan Sungai Merdeka, Kecamatan Samboja. Sedangkan areal yang termasuk dalam wilayah Kabupaten Penajam Paser Utara adalah Desa Semoi Dua, Kecamatan Sepaku.
        </p>
    </div>
</div>

<button class="btn col text-left pt-4" type="button" data-toggle="collapse" data-target="#pengelola" aria-expanded="false" aria-controls="pengelola">
    <h1><b>PENGELOLA</b></h1>
    <hr class="bg-dark">
</button>
<div class="collapse" id="pengelola">
    <div class="pl-2 text-justify">
        <p>Instansi yang ditunjuk sebagai pengelolanya KHDTK Samboja adalah Badan Penelitian Teknologi Konservasi Sumber Daya Alam, beralamat kantor di jalan Soekarno Hatta KM 38, Kelurahan Sei Merdeka, Kec Samboja, Kab. Kutai Kartanegara, Kaltim.</p>
    </div>
</div>

<button class="btn col text-left pt-4" type="button" data-toggle="collapse" data-target="#sejarah" aria-expanded="false" aria-controls="sejarah">
    <h1><b>SEJARAH</b></h1>
    <hr class="bg-dark">
</button>
<div class="collapse" id="sejarah">
    <div class="pl-2 text-justify">
        <p>Kawasan hutan dengan tujuan khusus (KHDTK) hutan penelitian samboja pada awalnya dikenal dengan hutan Wanariset Samboja. Hutan Wanariset Samboja ditetapkan oleh Menteri Pertanian pada tahun 1979 seluas 504 ha (Anonim, 1979), selanjutnya pada tahun 1991 arealnya diperluas menjadi 3.504 ha (Anonim, 1991). Hutan wanariset samboja tersebut selanjutnya ditunjuk menajdi KHDTK untuk Hutan Penelitian Samboja pada Kawasan Taman Wisata Alam Bukit Soeharto melalui Keptusan Menteri Kehutanan (Anonim, 2004). KHDTK Samboja merupakan bagian dari kawasan Taman Wisata Alam Bukit Soeharto yang memiliki luas kurang lebih 61.850 ha yang selanjutnya statusnya berubah menjadi Taman Hutan Raya (Tahura) Bukit Soeharto. Sampai sekarang masyrakat umum asih mengenai KHDTK Samboja dengan Wanariset Samboja.</p>
        <p>Kawasan KHDTK Samboja memiliki sebuah jalur observasi yang dikenal dengan Rintis Wartono Kadri. Pintu gerbang jalur observasi ini ditandai dengan monumen patung fungsi jenis Amanita sp. (gambar 1) Nama rintis ini diambil dari nama Kepala Balai Litbang Kehutanan era 90-an yaitu Bapak Ir.Wartono Kadri. Kalur sepanjang 0,9 km ini berada di dalam kawasa hutan hujan dataran rendah seluas 80 ha dengan kondisi medan datar sampai bergelombang. Jalur observasi ini juga digunakan sebagai sarana Unit Pendidikan Konservasi dan Interprestasi Lingkungan (UPK-ILS) Samboja.</p>
    </div>
</div>

<button class="btn col text-left pt-4" type="button" data-toggle="collapse" data-target="#topo-hidro" aria-expanded="false" aria-controls="topo-hidro">
    <h1><b>TOPOGRAFI & HIDROLOGI</b></h1>
    <hr class="bg-dark">
</button>
<div class="collapse" id="topo-hidro">
    <div class="pl-2 text-justify">
        <p>Kondisi topografi di KHDTK Samboja rata-rata bergelombang ringan sampai sedang. Areal yang berada di wilayah kecamatan samboja berada pada ketinggian antara 50-150 m dpl, beberapa areal berupa daerah rawa air tawar yang selalu tergenang air.</p>
    </div>
</div>
@endsection
