<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/index.css">
</head>
<body>
  <?php
  require_once __DIR__ . '/../../repositories/author-repository.php';
    $authors = getAuthors();
  ?>
  <div class="app-shell">
  <?php require __DIR__ . "/../../components/admin/sidebar.php"?>

    <main class="app-main">
     <?php 
        $pageTitle = "Manajemen Penulis";
        $pageSubtitle = "Kelola data pengguna, hak akses, dan peran sistem";
        require __DIR__ . "/../../components/admin/topbar.php";
      ?>


      <div class="app-content">
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama penulis...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Penulis</a>
        </div>

        <div class="data-card">
          <table class="data-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Penulis</th>
                <th>Jumlah Buku Ditulis</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
          <tbody>
            <?php foreach ($authors as $index => $author): ?>
           <tr>
            <td><?= $index + 1; ?></td>
            <td><?= htmlspecialchars($author['name']); ?></td>
            <td><?= $author['total_books'] ?? 0; ?></td>
            <td>
              <div class="action-buttons">
                <a href="edit.php?id=<?= $author['id']; ?>" class="btn btn-outline btn-sm">Edit</a>
                <a href="../../actions/authors/destroy.php?id=<?= $author['id']; ?>" 
             class="btn btn-danger btn-sm" 
             onclick="return confirm('Apakah Anda yakin ingin menghapus penulis ini?')">Hapus</a>
        </div>
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
