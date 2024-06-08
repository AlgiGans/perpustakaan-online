<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Series Digital Library</title>
  <link rel="stylesheet" href="admin.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
        <img src="LOGO.png" alt="logo" height="75" width="140" />
      </div>

    <ul class="nav-links">
      <li>
        <a href="admin.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      <li>
        <a href="RakBuku.php">
          <i class='bx bx-box'></i>
          <span class="links_name">RakBuku</span>
        </a>
      </li>
      <li>
        <a href="Populer.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Populer</span>
        </a>
      </li>
      <li>
        <a href="Stories.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Stories</span>
        </a>
      </li>
      <li>
        <a href="Toko.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Toko</span>
        </a>
      </li>
      <li class="log_out">
      <a href="../index/login.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Series</span>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <h2>Koleksi Beragam Genre</h2>
        <br>
        <div class="box-container">
            <div class="box">
                <h3>1. Registrasi Akun</h3>
                <p>Daftarkan akun Anda di PesanUy untuk mendapatkan akses penuh ke layanan kami.</p>
            </div>
            <div class="box">
                <h3>2. Login Akun Anda</h3>
                <p>Masuk ke akun Anda dengan menggunakan informasi login yang telah Anda daftarkan.</p>
            </div>
            <div class="box">
                <h3>3. Lakukan Pemesanan Tiket di menu Reservasi</h3>
                <p>Setelah login, Anda dapat melanjutkan ke menu reservasi untuk memesan tiket bus sesuai dengan kebutuhan perjalanan Anda.</p>
            </div>
        </div>    
    </div>
  </div>
  </section>
</body>

</html>