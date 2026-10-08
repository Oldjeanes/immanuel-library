<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/create.css">
</head>
<body>
  <div class="app-shell">
    <?php require __DIR__ . "/../../components/admin/sidebar.php"; ?>

    <main class="app-main">
      <?php 
        $pageTitle = "Tambah Kategori";
        $pageSubtitle = "Tambahkan kategori buku baru ke dalam sistem";
        require __DIR__ . "/../../components/admin/topbar.php";
      ?>

      <div class="app-content">
        <form action="../../actions/categories/store.php" method="POST">
          <div class="form-card">
            <div class="form-section-title">DATA KATEGORI</div>

            <div class="form-group">
              <label for="name">NAMA KATEGORI</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Fiksi" required>
            </div>

            <div class="form-group">
              <label for="description">DESKRIPSI</label>
              <textarea id="description" name="description" rows="3" placeholder="Deskripsi singkat kategori"></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Kategori</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
