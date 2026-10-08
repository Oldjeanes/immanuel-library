<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Data perubahan penulis berhasil diterima:<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
echo "<br><a href='../../pages/authors/index.php'>Kembali ke Manajemen Penulis</a>";
?>