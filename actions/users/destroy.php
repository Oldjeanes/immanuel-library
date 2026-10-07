<?php
$id = $_GET['id'] ?? null;

if ($id) {
    echo "<h3>Pengguna dengan ID {$id} berhasil dihapus (Simulasi).</h3>";
} else {
    echo "<h3>ID Pengguna tidak ditemukan!</h3>";
}

echo "<br><a href='../../pages/users/index.php'>Kembali ke Manajemen Pengguna</a>";
?>