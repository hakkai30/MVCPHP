<?php
require_once __DIR__ . '/../config/db.php';

function obtenirTasques(): array {
    $pdo = getPDO();
    $sql = "SELECT t.id, t.title, t.description, t.created_at, t.category_id, c.nom AS category_nom 
            FROM tasks t 
            LEFT JOIN categories c ON t.category_id = c.id 
            ORDER BY t.id DESC";
    return $pdo->query($sql)->fetchAll();
}

function inserirTasca(string $title, string $description, ?int $categoryId): void {
    $pdo = getPDO();
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description, category_id) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $categoryId ?: null]);
}
