<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Judul_buku = $_POST['Judul_buku'];
    $Penulis = $_POST['Penulis'];
    $Tahun_terbit = $_POST['Tahun_terbit'];
    $Penerbit = $_POST['Penerbit'];     
    $Jumlah_halaman = $_POST['Jumlah_halaman'];

    $query = "UPDATE tb_stories SET Penulis='$Penulis', Tahun_terbit='$Tahun_terbit', Penerbit='$Penerbit', Jumlah_halaman='$Jumlah_halaman' WHERE Judul_buku='$Judul_buku'";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href = 'Stories.php';</script>";
    } else {
        echo "<script>alert('Error: " . $query . "<br>" . $koneksi->error . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Story</title>
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
    <form action="edit-story.php" method="post">
        <input type="hidden" name="Judul_buku" value="<?php echo $row['Judul_buku']; ?>">
        
        <label for="Judul_buku">Judul Buku:</label>
        <input type="text" id="Judul_buku" name="Judul_buku" value="<?php echo $row['Judul_buku']; ?>" required/>

        <label for="Penulis">Penulis:</label>
        <input type="text" id="Penulis" name="Penulis" value="<?php echo $row['Penulis']; ?>" required/>

        <label for="Tahun_terbit">Tahun Terbit:</label>
        <input type="text" id="Tahun_terbit" name="Tahun_terbit" value="<?php echo $row['Tahun_terbit']; ?>" required/>

        <label for="Penerbit">Penerbit</label>
        <input type="text" id="Penerbit" name="Penerbit" value="<?php echo $row['Penerbit']; ?>" required/>

        <label for="Jumlah_halaman">Jumlah Halaman:</label>
        <input type="text" id="Jumlah_halaman" name="Jumlah_halaman" value="<?php echo $row['Jumlah_halaman']; ?>" required/>

        <input type="submit" value="Update">
    </form>
</body>

</html>
