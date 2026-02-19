<?php
require_once __DIR__ . '/../config/db.php';

function obtenirCategories(): array {
    $pdo = getPDO();
    $sql = "SELECT id, nom FROM categories ORDER BY nom";
    return $pdo->query($sql)->fetchAll();
}
