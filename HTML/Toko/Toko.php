<?php
include '../koneksi.php';
$query = "SELECT * FROM tb_toko";
$result = $koneksi->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Toko Digital Library</title>
  <link rel="stylesheet" href="../Dashboard/admin.css">
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
        <a href="../Dashboard/admin.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      <li>
        <a href="../Dashboard/RakBuku.php">
          <i class='bx bx-box'></i>
          <span class="links_name">RakBuku</span>
        </a>
      </li>
      <li>
        <a href="../Dashboard/Populer.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Populer</span>
        </a>
      </li>
      <li>
        <a href="../Dashboard/Series.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Series</span>
        </a>
      </li>
      <li>
        <a href="../Stories/Stories.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Stories</span>
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
        <span class="dashboard">Toko</span>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
    <div class="home-content">
        <button type="button" class="btn btn-tambah">
            <a href="mahasiswa-entry.php">Tambah Data</a>
        </button>
        <table class="table-data">
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['Judul_buku']; ?></td>
                    <td><?php echo $row['Jumlah']; ?></td>
                    <td><?php echo $row['Harga']; ?></td>
                    <td>
                    <button type="button" class="btn btnedit">
                        <a href="mahasiswa-edit.php?nim=<?php echo $row['nim']; ?>">Edit</a></button>
                        <button type="button" class="btn btnhapus">
                        <a href="mahasiswa-delete.php?nim=<?php echo $row['nim']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a></button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    /* CSS untuk tabel */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .home-content {
      padding: 20px;
    }
    .btn-tambah a {
      text-decoration: none;
      color: white;
    }
    .btn-tambah {
      background-color: #28a745;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-bottom: 20px;
      display: inline-block;
    }
    .btn-tambah:hover {
      background-color: #218838;
    }
    .table-data {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .table-data th, .table-data td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    .table-data th {
      background-color: #4CAF50;
      color: white;
    }
    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .table-data tr:hover {
      background-color: #ddd;
    }
    .table-data th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
    /* CSS untuk link "Edit" dan "Hapus" */
td a {
    text-decoration: none; /* Menghapus garis bawah default dari link */
    padding: 3px 5px; /* Memberikan padding agar tampilan lebih luas */
    border-radius: 3px; /* Mengatur sudut border agar lebih bulat */
    background-color: #007bff; /* Warna latar belakang link */
    color: #fff; /* Warna teks */
}

/* CSS untuk link "Edit" ketika dihover */
td a:hover {
    background-color: #CFDCE4; /* Warna latar belakang link ketika dihover */
}

  </style>
</body>
</html>
  </div>
  </section>
</body>

</html>