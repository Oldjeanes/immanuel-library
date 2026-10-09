<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "Data buku berhasil diperbarui (Simulasi).<br>";
    echo '<a href="../../pages/books/index.php">Kembali ke Manajemen Buku</a>';
} else {
    echo "Akses tidak diizinkan!";
}
?>