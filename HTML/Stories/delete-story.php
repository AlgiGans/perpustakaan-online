<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tb_stories WHERE id = $id";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error: " . $query . "<br>" . $koneksi->error . "');</script>";
    }
}
?>
