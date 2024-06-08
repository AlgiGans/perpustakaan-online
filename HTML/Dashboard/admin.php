<?php
include '../Koneksi.php';
$query = "SELECT * FROM tb_stories";
$result = $koneksi->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Dashboard Admin Digital Library</title>
  <link rel="stylesheet" href="admin.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php

  ?>
  <div class="sidebar">
    <div class="logo-details">
      <img src="../Image/LOGO.png" alt="logo" height="75" width="140" />
    </div>

    <ul class="nav-links">
      <li>
        <a href="admin.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="RakBuku.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Rak Buku</span>
        </a>
      </li>
      <li>
        <a href="Populer.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Populer</span>
        </a>
      </li>
      <li>
        <a href="Series.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Series</span>
        </a>
      </li>
      <li>
        <a href="../Stories/Stories.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Stories</span>
        </a>
      </li>
      <li>
        <a href="Toko.php">
          <i class='bx bx-box'></i>
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <h2>Digital Library</h2>
    </div>
  </section>
 
</body>
</html>