<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    echo "Data berhasil diterima dari Form Tambah Buku:<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<a href="../../pages/books/index.php">Kembali ke Manajemen Buku</a>';
} else {
    echo "Akses tidak diizinkan!";
}
?>