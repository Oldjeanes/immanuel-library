<?php
require_once __DIR__ . "/../config/database.php";

function getCategories()
{
  global $pdo;

  $query = "select * from categories";
  $stnt = $pdo->prepare($query);
  $stnt->execute();

  $categories = $stnt->fetchAll();

  return $categories;
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
