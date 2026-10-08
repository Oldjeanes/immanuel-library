<?php
echo "<pre>";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Kategori dengan ID $id berhasil dihapus (Simulasi).";
}
echo "</pre>";
 echo "<br><a href='../../pages/categories/index.php'>Kembali ke Manajemen Kategori</a>";
?>