@extends('berita.detail5')

@section('content')

<button onclick="window.history.back()" type="button" class="btn-close" aria-label="Close"
style="margin-top: 50px;"></button>
<div class="row" style="margin-top: 10px;">
<div class="col-lg">
    <div class="card shadow-lg">
        <!-- Image for the article -->
        <img src="../gambar/kebakaranhutan.jpg" class="img-thumbnail mx-auto d-block" alt="Gambar"
            style="width: 80%; max-width: 900px;  margin-top: 10px;">

        <!-- Body of the article -->
        <div class="card-body">
            <h2 class="card-title text-center"> Kebakaran hutan</h2>
            <p class="author-info text-center">Ditulis pada: 10 Oktober 2024</p>

            <div class="content-body">
                <p>
                    Kebakaran hutan yang terjadi di wilayah Sumatera pada tanggal 11 Oktober 2024 telah
                    mengakibatkan kerusakan yang parah. Api mulai melahap area hutan yang kaya akan
                    keanekaragaman hayati, mengancam habitat berbagai spesies yang terancam punah.
                </p>
                <p>
                    Pihak berwenang telah mengerahkan tim pemadam kebakaran untuk memadamkan api, namun
                    cuaca yang kering dan angin kencang mempersulit upaya tersebut. Selain itu, asap dari
                    kebakaran ini telah menyebar ke daerah pemukiman, menyebabkan dampak kesehatan bagi
                    warga setempat.
                </p>
                <p>
                    Pemerintah menghimbau masyarakat untuk waspada dan menghindari pembakaran lahan serta
                    melaporkan jika melihat kebakaran untuk mencegah penyebaran lebih lanjut.
                </p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection