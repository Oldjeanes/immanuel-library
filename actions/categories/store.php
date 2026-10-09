<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    echo "Data berhasil diterima dari Form Tambah Kategori:<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<br><a href='../../pages/categories/index.php'>Kembali ke Manajemen Kategori</a>";
} else {
    echo "Akses tidak diizinkan!";
}
?>