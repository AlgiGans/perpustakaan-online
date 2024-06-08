<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Judul_buku = $_POST['Judul_buku'];
    $Jumlah = $_POST['Jumlah'];
    $Harga = $_POST['Harga'];

    $query = "INSERT INTO tb_toko (Judul_buku, Jumlah, Harga) 
              VALUES ('$Judul_buku', '$Jumlah', '$Harga')";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = 'Toko.php';</script>";
    } else {
        echo "<script>alert('Error: " . $query . "<br>" . $koneksi->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Story</title>
    <link rel="stylesheet" href="../Dashboard/admin.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        form input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="submit"] {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
        }
        form input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form action="toko-entry.php" method="post">
        <label for="Judul_buku">Judul Buku:</label>
        <input type="text" id="Judul_buku" name="judul" required>

        <label for="Jumlah">Jumlah:</label>
        <input type="text" id="Jumlah" name="Jumlah" required>

        <label for="Harga">Harga:</label>
        <input type="text" id="Harga" name="Harga" required>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
