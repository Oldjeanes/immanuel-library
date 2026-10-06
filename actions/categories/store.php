<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Data berhasil diterima dari Form Tambah Kategori:<br>";
    print_r($_POST);
}
?>