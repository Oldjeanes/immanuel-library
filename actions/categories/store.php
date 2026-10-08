<?php
echo "<pre>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Data berhasil diterima dari Form Tambah Kategori:<br>";
    print_r($_POST);
}
echo "</pre>";
echo "<br><a href='../../pages/categories/index.php'>Kembali ke Manajemen Kategori</a>";
?>