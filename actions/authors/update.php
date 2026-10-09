<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    echo "Data perubahan penulis berhasil diterima:<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Akses tidak diizinkan!";
}

echo "<br><a href='../../pages/authors/index.php'>Kembali ke Manajemen Penulis</a>";
?>