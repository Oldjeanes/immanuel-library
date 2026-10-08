<?php
echo "<pre>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Data perubahan berhasil diterima:<br>";
    print_r($_POST);
}
echo "</pre>";
 echo "<br><a href='../../pages/categories/index.php'>Kembali ke Manajemen Kategori</a>";
?>