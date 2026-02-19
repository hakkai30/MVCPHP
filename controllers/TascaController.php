<?php
require_once __DIR__ . '/../models/TascaModel.php';
require_once __DIR__ . '/../models/CategoryModel.php';

function llistarTasques(): void {
    $error_bd = null;
    $tasques = [];
    try {
        $tasques = obtenirTasques();
    } catch (PDOException $e) {
        $error_bd = $e->getMessage();
    }
    require __DIR__ . '/../views/tasques.php';
}

function formulariNova(): void {
    $error_bd = $_SESSION['error_bd'] ?? null;
    unset($_SESSION['error_bd']);
    $categories = [];
    try {
        $categories = obtenirCategories();
    } catch (PDOException $e) {
        $error_bd = $e->getMessage();
    }
    require __DIR__ . '/../views/tasques_nova.php';
}

function crearTasca(): void {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: index.php');
        exit;
    }
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $categoryId = !empty($_POST['category_id']) ? (int) $_POST['category_id'] : null;
    if ($title === '') {
        header('Location: index.php?action=nova');
        exit;
    }
    try {
        inserirTasca($title, $description, $categoryId);
    } catch (PDOException $e) {
        $_SESSION['error_bd'] = $e->getMessage();
        header('Location: index.php?action=nova');
        exit;
    }
    header('Location: index.php');
    exit;
}
