<?php

require_once __DIR__ . "/../config/database.php";
function getAuthors()
{
    global $pdo;

    $query = "SELECT a.id, a.name, COUNT(ba.book_id) AS total_books
              FROM authors a
              LEFT JOIN book_author ba ON a.id = ba.author_id
              GROUP BY a.id, a.name";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAuthor()
{
  $author = [
    "id"   => 1,
    "name" => "Andrea Hirata",
    "bio"  => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.",
  ];

  return $author;
}
