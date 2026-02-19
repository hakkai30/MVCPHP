<?php
require_once __DIR__ . '/../models/CategoryModel.php';

function llistarCategories(): void {
    $error_bd = null;
    $categories = [];
    try {
        $categories = obtenirCategories();
    } catch (PDOException $e) {
        $error_bd = $e->getMessage();
    }
    require __DIR__ . '/../views/categories.php';
}
