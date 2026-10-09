<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? '';

    echo "<h3>Data Pengguna Berhasil Diperbarui (Simulasi)</h3>";
    echo "<pre>";
    print_r([
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'role' => $role
    ]);
    echo "</pre>";
    echo "<br><a href='../../pages/users/index.php'>Kembali ke Manajemen Pengguna</a>";
} else {
    echo "Akses tidak diizinkan!";
}
?>