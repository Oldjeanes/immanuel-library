<?php
echo "<pre>";
$id = $_GET['id'] ?? null;

if ($id) {
    echo "Buku dengan ID $id berhasil dihapus (Simulasi).";
} else {
    echo "ID buku tidak ditemukan.";
}
echo "</pre>";
echo "<br><a href='../../pages/books/index.php'>Kembali ke Manajemen Buku</a>";
?>