<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>

<body>
  <?php
  require_once '../../repositories/author-repository.php';
  $author = getAuthor();
  ?>
  <div class="app-shell">
     <?php require __DIR__ . "/../../components/admin/sidebar.php"?>

    <main class="app-main">
      <?php 
        $pageTitle = "Edit Penulis";
        $pageSubtitle = "Perbarui profil dan biografi singkat penulis";
        require __DIR__ . "/../../components/admin/topbar.php";
      ?>

      <div class="app-content">
        <form action="../../actions/authors/update.php" method="POST">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" value="<?= $author['name'] ?>">
            </div>
            <div class="form-group">
              <label for="total_books">Jumlah Buku Ditulis</label>
              <input type="number" id="total_books" name="total_books" value="<?= $author['total_books']; ?>">
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>