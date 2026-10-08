<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/index.css">
</head>
<body>
  <?php
  $user = ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"];
  ?>
  <div class="app-shell">
   <?php require __DIR__ . "/../../components/admin/sidebar.php"?>

    <main class="app-main">
    <?php 
        $pageTitle = "Manajemen Pengguna";
        $pageSubtitle = "Kelola data pengguna, hak akses, dan peran sistem";

        require_once __DIR__ . '/../../repositories/user-repository.php';
        $users = getUsers();
      ?>

    <?php
      require __DIR__ . "/../../components/admin/topbar.php";
    ?>

      <div class="app-content">
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama atau email pengguna...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Pengguna</a>
        </div>

        <div class="data-card">
          <table class="data-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                 <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $user['id']; ?></td>
                  <td><?= $user['name']; ?></td>
                  <td><?= $user['email']; ?></td>
                  <td><?= $user['role']; ?></td>
                  <td>
                    <a href="edit.php?id=<?= $user['id']; ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="../../actions/users/destroy.php?id=<?= $user['id']; ?>" 
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
                </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="pagination">
          <span class="pagination-btn is-disabled">&lt;</span>
          <span class="pagination-btn is-disabled">&gt;</span>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
