<?php
require_once __DIR__ . "/../config/database.php";

function getCategories()
{
    global $pdo;

    $query = "SELECT c.id, c.name, c.description, COUNT(b.id) AS total_books
              FROM categories c
              LEFT JOIN books b ON c.id = b.category_id
              GROUP BY c.id, c.name, c.description";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getCategory()
{
  $category = [
    "id"          => 1,
    "name"        => "Fiksi",
    "description" => "Novel dan cerita rekaan",
  ];

  return $category;
}

function isCategoryExist($categoryId)
{
  global $pdo;

  $query = "select count(id) from categories where id = :category_id";

  $stmt = $pdo->prepare($query);
  $stmt->execute([
    'category_id' => $categoryId
  ]);

  $isCategoryExist = $stmt->fetchColumn() > 0;

  return $isCategoryExist;
}
