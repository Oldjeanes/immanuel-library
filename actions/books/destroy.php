<?php
$id = $_GET['id'] ?? null;

if ($id) {
    echo "Buku dengan ID $id berhasil dihapus (Simulasi).";
} else {
    echo "ID buku tidak ditemukan.";
}
?>