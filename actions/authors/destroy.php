<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Penulis dengan ID $id berhasil dihapus (Simulasi).";
}
echo "<br><a href='../../pages/authors/index.php'>Kembali ke Manajemen Penulis</a>";
?>