<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Agar formulir berada di tengah layar secara vertikal dan horizontal */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f4f6;
        }

        .contact-form-container {
            width: 100%;
            max-width: 1000px;  /* Lebar formulir lebih besar */
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
        }

        .contact-form-container h2 {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;  /* Dua kolom lebar */
            gap: 20px;  /* Jarak antar elemen */
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #5a67d8;
            box-shadow: 0 0 8px rgba(90, 103, 216, 0.5);
        }

        .btn-submit {
            background-color: #5a67d8;
            color: white;
            font-weight: bold;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            background-color: #4c51bf;
        }

        /* Untuk membuat layout responsif di perangkat kecil */
        @media (max-width: 768px) {
            form {
                grid-template-columns: 1fr;  /* Mengubah ke satu kolom di layar kecil */
            }
        }

    </style>
</head>

<body>
    <div class="contact-form-container">
        <button type="button" class="btn btn-outline-secondary mb-3" onclick="window.history.back();">&larr; Kembali</button>
        <h2>Hubungi Kami</h2>
        <form action="submit_form.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Nama Perusahaan (Opsional)</label>
                <input type="text" class="form-control" id="company" placeholder="Masukkan Nama Perusahaan">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="phone" placeholder="Masukkan Nomor Telepon Anda" required pattern="[0-9]{10,12}">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Tulis Pesan Anda" required></textarea>
            </div>
            <button type="submit" class="btn btn-secondary w-100">Kirim Pesan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
