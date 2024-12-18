@extends('template')

@section('content')
    <div class="container">
        <h2>Berita Terbaru</h2>
        <div class="row" id="berita-container">
            <!-- Berita akan dimasukkan di sini oleh JavaScript -->
        </div>
    </div>

    <script>
        // Mengambil data dari API kabars
        fetch('/api/kabars')
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('berita-container');
                data.forEach(kabar => {
                    const card = `
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="${kabar.gambar}" class="card-img-top" alt="Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">${kabar.judulberita}</h5>
                                    <p class="card-text">${kabar.deskripsi}</p>
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    `;
                    container.innerHTML += card;
                });
            });
    </script>
@endsection
