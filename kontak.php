<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <?php include 'index.php'; ?>

     <!-- Social Media Links -->
<div class="social-media-links text-center mt-4">
    <h4>Ikuti saya di media sosial:</h4>
    <a href="https://www.linkedin.com/in/nadia-putri-syahrani-b75485319?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="btn btn-link">LinkedIn</a>
    <a href="https://github.com/yourprofile" target="_blank" class="btn btn-link">GitHub</a>
    <a href="https://www.tiktok.com/@ndya_ps?_t=ZS-8t7KT8NYb3Q&_r=1" target="_blank" class="btn btn-link"><i class="fab fa-tiktok" style="font-size: 30px;"></i> TikTok</a>
    <a href="https://www.instagram.com/nadiaputri0476?igsh=MTdvcjQ4aWU5NnR2MA==" target="_blank" class="btn btn-link"><i class="fab fa-instagram" style="font-size: 30px;"></i> Instagram</a>
</div>


    <!-- Contact Section -->
    <section class="contact py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kontak Saya</h2>
            <form action="email.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Anda</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Anda</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

           
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
