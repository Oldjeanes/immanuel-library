<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    echo "<pre>";
    echo "Data perubahan berhasil diterima:<br>";
    print_r($_POST);
    echo "</pre>";
    echo "<br><a href='../../pages/categories/index.php'>Kembali ke Manajemen Kategori</a>";
} else {
    echo "Akses tidak diizinkan!";
}
?>