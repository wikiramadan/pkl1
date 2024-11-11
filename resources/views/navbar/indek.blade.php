<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap -->
    <link rel="icon" type="../gambar/logo.png" href="../gambar/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/stylenav.css">

</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../gambar/logo.png" alt="#" style="width: 40px; height: auto;">
            </a>
            <a class="navbar-brand" href="pages/rpl.php">PPLG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="navbar">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ContentBerita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contak">Kontak</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="text-center">
        <div class="container">
            <div class="container col-sm-4 col-lg-8 col-md-6">
                <img src="../gambar/logo.png" class="container side-img left-img" alt="../gambar Kiri">
                <img src="../gambar/cs.jpeg" alt="../gambar" class="header-img">
                <img src="../gambar/images.jpg" class="container side-img right-img" alt="../gambar Kanan">
            </div>
            <div class="container col-sm-12 col-lg-4 col-md-6" style="margin-top: 50px;">
                <h3 class="fst-italic">Selamat datang! Ayo berkolaborasi dan </h3>
                <h3 class="fst-italic">menciptakan sesuatu yang hebat </h3>
            </div>
        </div>
    </header>

    <div class="container mt-5 mb-10">
        <h1 class="text-center mb-5">Tentang Kami</h1>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="../gambar/wiki.jpeg" class="profile-img" alt="Foto Profil 1" />
                    <h2>Wiki Ramadan</h2>
                    <p>
                        <strong class="fst-italic">Posisi:</strong> Programmer <br>
                        <strong class="fst-italic">Lokasi:</strong> Padang, Sumatra Barat <br>
                        <strong class="fst-italic">Email:</strong> wikiramadan8@gmail.com
                    </p>
                    <a href="{{url('/detail-wiki') }}" class="btn btn-outline-secondary">Detail</a>


                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="../gambar/iip.jpeg" class="profile-img" alt="Foto Profil 2" />
                    <h2>Afifi Abdul Hadi</h2>
                    <p>
                        <strong class="fst-italic">Posisi:</strong> UI/UX Designer <br>
                        <strong class="fst-italic">Lokasi:</strong> Bandung, Sumatra Barat <br>
                        <strong class="fst-italic">Email:</strong> Afifihadi7@gmail.com
                    </p>
                    <a href="{{url('/detail-afifi') }}" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>
        </div>
    </div>

   
        @include('ContentBerita.content')


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    window.onscroll = function() {
        const navbar = document.getElementById('navbar');
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
    </script>
   
   @include('include.footer')


</body>

</html>