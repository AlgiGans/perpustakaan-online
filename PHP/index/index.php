<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Image/LOGO.png">
    <title>Digital Library</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../Image/LOGO.png" alt="" weight="80" height="80">
        </div>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="index.php">Beranda</a>
            <a href="index.php">Profil</a>
        </div>
        <right>
        <div class="d">
            <a href="#  " id="loginBtn">Login</a>
        </div>
    </right>
    </header>
    <main>
        <center>
            <h1>
                Digital Library
            </h1>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <div class="slide">
                        <img class="slide-image" src="../Image/Slide1.jpg" alt="Slide 1">
                    </div>
                    <div class="slide">
                        <img class="slide-image" src="../Image/Slide2.jpg" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img class="slide-image" src="../Image/Slide3.jpg" alt="Slide 3">
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <script>
                var slideIndex = 1;
                function showSlides(n) {
                    var slides = document.getElementsByClassName("slide");
                    if (n > slides.length) {
                        slideIndex = 1;
                    }
                    if (n < 1) {
                        slideIndex = slides.length;
                    }
                    for (var i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slides[slideIndex - 1].style.display = "block";
                }
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                showSlides(slideIndex);
            </script>
        </center>
        <br><br>
        <table>
            <tr>
                <td>
                    <h3>Akses</h3>
                    <p>Kemudahan pengguna dalam mencari dan mengakses informasi yang diinginkan, kecepatan loading halaman dan kecepatan download file.
                        Ketersediaan berbagai format file, seperti PDF, EPUB, dan MOBI, untuk memudahkan akses di berbagai perangkat.Kompatibilitas dengan berbagai perangkat, seperti komputer, laptop, tablet, dan smartphone.</p>
                </td>
                <td>
                    <h3>Fitur-fitur</h3>
                    <p>Fitur pencarian yang canggih dan mudah digunakan untuk menemukan informasi yang diinginkan, fitur penyortiran berdasarkan berbagai kriteria, seperti judul, penulis, tanggal publikasi, dan lain sebagainya.
                        Fitur untuk menyimpan halaman yang ingin dibaca kembali di kemudian hari.Fitur untuk mengunduh file ke perangkat pengguna.
                        Fitur untuk membuat catatan atau komentar pada teks yang dibaca.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Koleksi</h3>
                    <p>Jumlah koleksi yang tersedia, termasuk buku elektronik, jurnal ilmiah, artikel, dan sumber informasi lainnya.Kualitas konten yang tersedia, termasuk akurasi, relevansi, dan kelengkapan informasi.Keragaman jenis koleksi yang tersedia, 
                        mencakup berbagai bidang ilmu dan topik.Pembaruan koleksi secara berkala dengan informasi terbaru.</p>
                </td>
                <td>
                    <h3>Layanan</h3>
                    <p>Ketersediaan bantuan pengguna yang mudah diakses dan informatif.Pelatihan bagi pengguna untuk menggunakan layanan digital library secara efektif.
                        Promosi layanan digital library kepada masyarakat luas.Interaksi dengan pengguna melalui berbagai saluran, seperti media sosial dan email.</p>
                </td>
            </tr>
        </table>
        <div class="container">
            <p>Belum memiliki akun?</p>
            <button id="registerBtn" class="btn_register">Daftar Sekarang!</button>
        </div>
    </main>
    <footer>
        <div class="footer">
        </div>
    </footer>
    
    <!-- Add popup box after the footer -->
    <div id="popupBox" class="popup-box">
        <div class="popup-content">
            <h2>Belum punya akun?</h2>
            <p>Silakan daftar terlebih dahulu untuk mengakses layanan kami.</p>
            <a href="register.php" class="btn_register">Daftar Sekarang!</a><br><br>
            <a href="login.php" class="">Login</a>
        </div>
    </div>

    <script>
        // Add JavaScript to show the popup box when the login button is clicked
        var loginBtn = document.getElementById("loginBtn");
        loginBtn.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            document.getElementById('popupBox').style.display = 'block'; // Show popup box
        });

        // Add JavaScript to hide the popup box when the register button is clicked
        document.getElementById('registerBtn').addEventListener('click', function() {
            document.getElementById('popupBox').style.display = 'none';
        });

        // Add JavaScript for the onload event to hide the popup box when the page is loaded
        window.addEventListener('load', function() {
            document.getElementById('popupBox').style.display = 'none';
        });
    </script>
</body>
</html>
