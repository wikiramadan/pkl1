@extends('navbar.indek')

@section('content')

<div class="container md-5" style="margin-top: 50px;">
    <div class="row">

        <!-- Berita 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../gambar/banjir.jpg" class="card-img-top rounded mx-auto d-block" alt="../gambar Banjir">
                <div class="card-body">
                    <h5 class="news-title">Banjir Melanda Pangkalpinang</h5>
                    <p class="news-body" style="width: 350px;">Hujan deras selama tiga hari berturut-turut
                        menyebabkan banjir besar di daerah Pangkalpinang...</p>
                    <a href="{{url('berita.show') }}" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>
        </div>

        <!-- Berita 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../gambar/dpr.jpeg" class="card-img-top rounded mx-auto d-block" alt="../gambar DPR">
                <div class="card-body">
                    <h5 class="news-title">Anggota DPR Tertangkap Korupsi</h5>
                    <p class="news-body" style="width: 300px;">Seorang anggota DPR ditangkap oleh KPK atas
                        dugaan
                        kasus korupsi proyek infrastruktur...</p>
                    <a href="{{url('berita.detail2') }}" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>
        </div>

        <!-- Berita 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../gambar/kec.jpeg" class="card-img-top rounded mx-auto d-block "
                    alt="../gambar Kecelakaan">
                <div class="card-body">
                    <h5 class="news-title">Kecelakaan di Jalan Tol</h5>
                    <p class="news-body" style="width: 310px;">Sebuah kecelakaan melibatkan mobil pribadi di
                        jalan
                        tol menyebabkan arus lalu lintas tersendat...</p>
                    <a href="{{url('berita.detail3') }}" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Berita 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../gambar/prabowo.jpg" class="card-img-top rounded mx-auto d-block"
                        alt="../gambar Prabowo">
                    <div class="card-body">
                        <h5 class="news-title">Prabowo dalam Perjalanan Politik</h5>
                        <p class="news-body" style="width: 300px;">Prabowo Subianto kembali mencalonkan diri
                            sebagai
                            presiden dengan dukungan dari berbagai partai...</p>
                        <a href="{{url('berita.detail4') }}" class="btn btn-outline-secondary">Detail</a>
                    </div>
                </div>
            </div>

            <!-- Berita 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="gambar/kebakaranhutan.jpg" class="card-img-top rounded mx-auto d-block"
                        alt="../gambar Kebakaran Hutan">
                    <div class="card-body">
                        <h5 class="news-title">Kebakaran Hutan Meluas</h5>
                        <p class="news-body" style="width: 300px;">Kebakaran hutan yang terjadi di wilayah
                            Sumatera
                            semakin meluas dan mengakibatkan kerusakan lingkungan...</p>
                        <a href="{{url('berita.detail5') }}" class="btn btn-outline-secondary">Detail</a>
                    </div>
                </div>
            </div>

            <!-- Berita 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../gambar/tauran.jpg" class="card-img-top rounded mx-auto d-block"
                        alt="../gambar Tauran">
                    <div class="card-body">
                        <h5 class="news-title">Tauran di Jakarta</h5>
                        <p class="news-body" style="width: 300px;">Sejumlah remaja tertangkap usai terlibat
                            dalam aksi
                            tawuran dngan kelopok lain di pusat kota Jakarta...</p>
                        <a href="{{url('berita.detail6') }}" class="btn btn-outline-secondary">Detail</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <a href="{{ route('berita/create') }}" class="btn btn-secondary mb-3">Tambah Berita</a>
</div>

@endsection