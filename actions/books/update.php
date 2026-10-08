<?php
echo "<pre>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "Data buku berhasil diperbarui (Simulasi).";
}
echo "</pre>";
echo "<br><a href='../../pages/books/index.php'>Kembali ke Manajemen Buku</a>";
?>
