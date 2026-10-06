<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Data perubahan berhasil diterima:<br>";
    print_r($_POST);
}
?>