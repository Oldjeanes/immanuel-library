<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    echo "<h3>Data Pengguna Baru Berhasil Diterima (Simulasi):</h3>";
    echo "<pre>";
    print_r([
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'role' => $role
    ]);
    echo "</pre>";
    echo "<br><a href='../../pages/users/index.php'>Kembali ke Manajemen Pengguna</a>";
}
?>