@extends('public.app')

@section('images')
<img src="{{ asset('assets/frontend/img/header3.png') }}" class="img-header d-block w-100 img-fluid" alt="...">
@endsection

@section('page')
<div class="pt-4">
    <h1><b>EKOWISATA</b></h1>
    <hr class="bg-dark">
    <div class="text-justify">
        <p>Potensi wisata alam saat ini bukan hanya yang berada di kawasan taman nasional masih banyak kawasan alami di luar taman nasional dengan potensi obyek daya tarik wisata. Salah satunya merupakan Kawasan Hutan dengan Tujuan Khusus (KHDTK) di Samboja. KHDTK Samboja adalah kawasan hutan yang diperuntukkan sebagai hutan penelitian. Kawasan ini merupakan bagian dari Taman Hutan Raya Bukit Soeharto dan terletak di jalan poros Balikpapan-Samarinda dan jalan Samboja-Sepaku. Letak yang strategis inilah sehingga memudahkan pengunjung untuk datang berwisata.</p>
        <p>KHDTK Samboja tidak hanya diperuntukkan sebagai tempat penelitian saja, akan tetapi juga dimanfaatkan sebagai sarana pendidikan lingkungan. KHDTK Samboja sering mendapat kunjungan lapangan mahasiswa dan pelajar yang ingin mempelajari keanekaragaman flora dan fauna atau fungsi hutan secara umum. Dari seringnya kunjungan mahasiswa dan pelajar tersebut, minat masyarakat untuk mengunjungi KHDTK Samboja pun meningkat. Bisa dikatakan KHDTK Samboja memiliki potensi untuk dikembangkan menjadi objek ekowisata. Keanekaragaman flora dan fauna juga keunikan bentang alam yang dimiliki KHDTK Samboja dapat menjadi hal yang menarik untuk di eksplore atau di jelajah.</p>
        <p>Beberapa area dalam KHDTK Samboja lokasi ekowisata antara lain:</p>
        <ol>
            <li>
                <h5>Air Panas</h5>
                <img src="{{ asset('assets/frontend/img/air_panas.png') }}" alt="" class="img-fluid py-2">
                <p>Sumber air panas berbentuk kolam dengan diameter 3,3m. kolam air panas ini memiliki rata-rata 42 derajat celcius dan mengeluarkan gelembung udara yang berbau belerang. Sumber air panas ini unik karena muncul di tengah hutan dan bukan di tengah hutan gunung berapi.</p>
            </li>
            <li>
                <h5>Air terjun</h5>
                <div class="row pb-2">
                    <div class="col-3">
                        <img src="{{ asset('assets/frontend/img/air_terjun.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col">
                        <p>Air terjun yang ada di dalam KHDTK Hutan Penelitian Samboja masih belum banyak diketahui oleh masyarakat Kecamatan Samboja. Jaraknya yang cukup jauh dari jalan raya membuat lokasi ini “tersembunyi” di dalam hutan. Bentang alam unik ini baru ditemukan sekitar tahun 2015 oleh petugas pengelola KHDTK Hutan Penelitian Samboja.</p>
                        <p>Kondisinya sampai saat ini masih alami dan belum dikelola. Tinggi air terjun + 15 m, bagian bawah air terjun yang tidak terlalu dalam dapat digunakan berenang, meskipun tidak begitu luas.</p>
                        <p>Momen terbaik menikmati air terjun ini pada saat musim penghujan.</p>
                    </div>
                </div>
            </li>
            <li>
                <h5>Trek Rintis Wartono Kadri</h5>
                <p>Rintis Wartono Kadri adalah jalur observasi yang berada di kawasan hutan yang masih utuh, belum pernah terbakar dan merupakan salah satu contoh hutan dataran rendah Dipterocarpaceae di Kecamatan Samboja. Saat ini, Rintis Wartono Kadri aktif digunakan untuk tempat penelitian dan kunjungan wisata pendidikan baik dari para pelajar maupun mahasiswa.</p>
                <p>Keindahan hutan Rintis Wartono Kadri terletak pada tutupan tajuk dari berbagai jenis kelompok Dipterocarpaceae Atmoko et al, 2015). Selain itu, di Rintis Wartono Kadri juga terdapat berbagai jenis liana, palem hutan, dan pakis hutan. Tutupan tajuk yang cukup rapat menyebabkan udara di dalam hutan cukup sejuk bahkan di siang hari terik sekali pun. Berjalan di antara pohon berdiameter besar dan akar banir yang tinggi menjadi pengalaman menarik dan pelepas stress bekerja.</p>
                <img src="{{ asset('assets/frontend/img/trek_wartono.png') }}" alt="" class="img-fluid pb-4">
            </li>
            <li>
                <h5>Trek Tri Joko Mulyono</h5>
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('assets/frontend/img/trek_tri_joko_mulyono.png') }}" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col">
                        <p>Trek Tri Joko Mulyono adalah trek tanaman obat yang dibangun dengan tujuan utama untuk konservasi tanaman obat yang merupakan bagian dari penelitian di Balitek KSDA.</p>
                        <p>Jalur tanaman obat ini diberi nama Trek Tri Joko Mulyono yang merupakan mantan Sekretaris Badan Penelitian, Pengembangan dan Inovasi KLHK. Trek yang diresmikan tanggal 5 Februari 2016 memiliki panjang 300 m.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Berbagai jenis tanaman obat hasil eksplorasi dibudidayakan baik secara eksitu maupun insitu di demplot yang dibangun pada tahun 2012 tersebut. Menurut Yusub Wibisono, teknisi Balitek KSDA yang melakukan inventarisasi tanaman obat di trek tersebut, terdapat 58 tanaman obat yang sudah diidentifikasi jenisnya, tetapi masih banyak yang belum teridentifikasi.</p>
                        <p>Jenis tanaman obat tersebut memiliki bentuk hidup yang bervariasi dari pohon, perdu, semak dan liana. Diantaranya adalah jenis seluang belum, pasak bumi, tunjuk langit, mengkudu hutan, dan lidah adam. Khasiatnya beragam; dari mulai menyembuhkan sakit ringan seperti sakit kepala dan demam hingga sakit yang berat seperti berak darah.</p>
                    </div>
                    <div class="col-5">
                        <img src="{{ asset('assets/frontend/img/jalur_tanaman_obat.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/frontend/img/kunjungan_akademi_farmasi.png') }}" alt="" class="img-fluid pb-4">
                    </div>
                </div>
            </li>
            <li>
                <h5>Trek Henry Bastaman</h5>
            </li>
            <li>
                <h5>Susur Sungai Saka Kanan</h5>
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('assets/frontend/img/susur_sungai.png') }}" alt="" class="img-fluid py-2">
                    </div>
                    <div class="col">
                        <p>Di KHDTK Samboja terdapat aliran sungai yang cukup besar yaitu sungai Petetai dan sungai Saka Kanan. Sungaisungai tersebut memiliki potensi untuk wisata susur sungai (tubing). Kegiatan susur sungai tersebut menggunakan ban dalam dan sangat bergantung dengan tinggi permukaan air sungai. Di awal musim hujan debit air sungai mulai naik sehingga menjadi saat yang tepat sungai untuk diarungi. Dengan alasan keamanan, wisatawan yang ingin menyusuri sungai harus menggunakan pelampung, karena dikhawatirkan akan terjatuh dari ban pada saat mengarungi bagian sungai dengan arus yang deras.</p>
                    </div>
                </div>
            </li>
            <li>
                <h5>Spot foto</h5>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('assets/frontend/img/spot_foto_1.png') }}" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col">
                        <p>Lokasi ini merupakan keindahan tajuk-tajuk pepohonan di hutan KHDTK Samboja yang terbentag luas dan membantuk landscape. Berfungsi sebagai tempat rekreatif dan atraktif bagi pengunjung.</p>
                    </div>
                </div>
            </li>
            <li>
                <h5>Orang Utan Center (ORC)</h5>
                <p>Orang utan center merupakan pusat rehabilitasi yang  dirilisasi oleh pemerintah kemetrian lingkngan hidup dan kehutanan</p>
            </li>
        </ol>
    </div>
</div>
@endsection

@section('side')
{{-- Galeri? --}}
@endsection
