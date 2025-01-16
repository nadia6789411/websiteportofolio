<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* Styling untuk Galeri Proyek */
        .project-card {
            border-radius: 10px;
            overflow: hidden;
            background-color: rgb(92, 171, 202);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0; /* Menambahkan border-radius pada gambar */
            transition: transform 0.3s ease;
        }

        .project-card img:hover {
            transform: scale(1.05); /* Membesarkan gambar sedikit saat hover */
        }

        .project-description {
            padding: 20px;
            color: #fff; /* Menambahkan warna teks putih pada deskripsi */
        }

        .project-description h5 {
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff; /* Mengubah warna teks menjadi putih */
        }

        .project-description p {
            font-size: 1rem;
            color: #ddd; /* Mengubah warna teks menjadi lebih terang agar kontras dengan latar belakang */
        }

        /* Styling untuk Filter/Kategori */
        .filter-button {
            margin: 10px 5px;
            cursor: pointer;
        }

        .filter-button.active {
            background-color: #007bff;
            color: white;
        }

        /* Styling untuk Profil Foto */
        .profile-img {
            border-radius: 50%;
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Memberikan bayangan pada foto profil */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.1); /* Membesarkan foto sedikit saat hover */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Bayangan lebih tajam saat hover */
        }

        /* Grid Layout untuk Proyek */
        .projects .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Menambahkan gap antar kolom */
        }

        .projects .col-md-4 {
            flex: 1 1 calc(33.333% - 20px); /* Membuat card tampil dalam 3 kolom */
            max-width: calc(33.333% - 20px); /* Memastikan bahwa card tidak melebihi lebar 33% */
        }

        /* Responsif untuk perangkat lebih kecil */
        @media (max-width: 768px) {
            .projects .col-md-4 {
                flex: 1 1 100%; /* Pada layar kecil, card akan menempati 100% lebar */
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

<!-- Navbar -->
<?php include 'index.php'; ?>

    <!-- About Section -->
    <section class="about py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="nadia.jpg" alt="Foto Profil" class="profile-img mb-4">
                </div>
                <div class="col-md-8">
                    <h3>Nadia Putri Syahrani</h3>
                    <p>Mahasiswa di Universitas Kuningan, Jurusan Sistem Informasi.</p>
                    <p>Keterampilan Web Development, UI/UX Design, dan Mobile App Development.</p>
                    <p>Tujuan Mengembangkan aplikasi inovatif yang dapat memecahkan masalah dunia nyata dan meningkatkan
                        kehidupan manusia.</p>
                    
                    <!-- Tombol untuk mengunduh CV -->
                    <a href="CV.pdf" class="btn btn-primary" download>Unduh CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyek Galeri Section -->
    <section class="projects py-5 bg-light" id="projects">
        <div class="container">
            <h2 class="text-center mb-4">Proyek-Proyek Saya</h2>

            <!-- Filter/Kategori Proyek -->
            <div class="text-center mb-4">
                <button class="btn btn-outline-primary filter-button active" onclick="filterProjects('all')">Semua</button>
                <button class="btn btn-outline-primary filter-button" onclick="filterProjects('web')">Proyek Website</button>
                <button class="btn btn-outline-primary filter-button" onclick="filterProjects('app')">Proyek Membuat IoT Pendeteksi Kebakaran</button>
            </div>

            <!-- Galeri Proyek -->
            <div class="row" id="projects-container">
                <!-- Proyek 1 -->
                <div class="col-md-4 project-card" data-category="web" data-bs-toggle="modal" data-bs-target="#projectModal1">
                    <img src="website.jpg" alt="Proyek 1">
                    <div class="project-description">
                        <h5>Proyek Website Absensi</h5>
                        <p>Desain dan pengembangan website Absensi untuk Melakukan Absensi pada Mahasiswa.</p>
                    </div>
                </div>

                <!-- Modal untuk Proyek 1 -->
                <div class="modal fade" id="projectModal1" tabindex="-1" aria-labelledby="projectModal1Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="projectModal1Label">Proyek Website Absensi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="website.jpg" alt="Proyek 1" class="img-fluid mb-3">
                                <p><strong>Deskripsi:</strong> Desain dan pengembangan website Absensi untuk Melakukan Absensi pada Mahasiswa.</p>
                                <p><strong>Fitur:</strong></p>
                                <ul>
                                    <li>Absensi online</li>
                                    <li>Manajemen data mahasiswa</li>
                                    <li>Pengelolaan jadwal absensi</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyek 2 -->
                <div class="col-md-4 project-card" data-category="app" data-bs-toggle="modal" data-bs-target="#projectModal2">
                    <img src="projek1.jpg" alt="Proyek 2">
                    <div class="project-description">
                        <h5>Proyek IoT Pendeteksi Kebakaran</h5>
                        <p>Pendeteksi kebakaran dengan IoT yang mengirimkan notifikasi melalui WhatsApp.</p>
                    </div>
                </div>

                <!-- Modal untuk Proyek 2 -->
                <div class="modal fade" id="projectModal2" tabindex="-1" aria-labelledby="projectModal2Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="projectModal2Label">Proyek IoT Pendeteksi Kebakaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="projek1.jpg" alt="Proyek 2" class="img-fluid mb-3">
                                <p><strong>Deskripsi:</strong> Proyek pembuatan IoT Pendeteksi Kebakaran untuk mencegah kebakaran dengan mengirimkan notifikasi via WhatsApp.</p>
                                <p><strong>Fitur:</strong></p>
                                <ul>
                                    <li>Pendeteksi asap</li>
                                    <li>Notifikasi WhatsApp</li>
                                    <li>Peringatan dini kebakaran</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyek 3 -->
                <div class="col-md-4 project-card" data-category="web" data-bs-toggle="modal" data-bs-target="#projectModal3">
                    <img src="dicoding.jpg" alt="Proyek 3">
                    <div class="project-description">
                        <h5>Project Dicoding</h5>
                        <p>Desain dan pengembangan website untuk pemula menggunakan HTML, JavaScript, dan CSS.</p>
                    </div>
                </div>

                <!-- Modal untuk Proyek 3 -->
                <div class="modal fade" id="projectModal3" tabindex="-1" aria-labelledby="projectModal3Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="projectModal3Label">Project Dicoding</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="dicoding.jpg" alt="Proyek 3" class="img-fluid mb-3">
                                <p><strong>Deskripsi:</strong> Desain dan pengembangan HTML, JavaScript, dan front-end Web untuk Pemula.</p>
                                <p><strong>Fitur:</strong></p>
                                <ul>
                                    <li>Pelatihan web development dasar</li>
                                    <li>Penggunaan HTML dan CSS</li>
                                    <li>Pembuatan halaman web interaktif</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Fungsi untuk memfilter proyek berdasarkan kategori
        function filterProjects(category) {
            const projects = document.querySelectorAll('.project-card');
            projects.forEach(project => {
                if (category === 'all' || project.getAttribute('data-category') === category) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });

            // Mengubah status tombol aktif
            const buttons = document.querySelectorAll('.filter-button');
            buttons.forEach(button => {
                button.classList.remove('active');
            });

            // Menambahkan kelas aktif pada tombol yang dipilih
            event.target.classList.add('active');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
