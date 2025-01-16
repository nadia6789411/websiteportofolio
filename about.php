<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling untuk foto profil */
        .profile-img {
            width: 100%;
            max-width: 250px; /* Membatasi lebar foto untuk tampilan yang lebih baik */
            height: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan halus */
        }

        /* Layout responsif */
        .about .row {
            display: flex;
            align-items: center; /* Menyusun konten vertikal di tengah */
        }

        /* Styling untuk teks di sebelah gambar */
        .about .col-md-8 {
            padding-left: 30px; /* Memberikan jarak antara gambar dan teks */
        }

        /* Responsif untuk ukuran gambar di perangkat kecil */
        @media (max-width: 768px) {
            .profile-img {
                max-width: 180px; /* Ukuran gambar lebih kecil pada perangkat kecil */
            }

            .about .col-md-8 {
                padding-left: 0; /* Menghapus padding pada perangkat kecil */
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include 'index.php'; ?>

    <!-- About Section -->
    <section class="about py-5">
        <div class="container">
            <h2 class="text-center mb-4">Tentang Saya</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="nadia.jpg" alt="Foto Profil" class="profile-img mb-4">
                </div>
                <div class="col-md-8">
                    <h3>Nadia Putri Syahrani</h3>
                    <p>Mahasiswa di Universitas Kuningan, Jurusan Sistem Informasi.</p>
                    <p>Keterampilan Web Development, UI/UX Design, dan Mobile App Development.</p>
                    <p>Tujuan Mengembangkan aplikasi inovatif yang dapat memecahkan masalah dunia nyata dan meningkatkan kehidupan manusia.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
