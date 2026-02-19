<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();

$action = $_GET['action'] ?? 'llistar';

if ($action === 'crear') {
    require_once __DIR__ . '/../controllers/TascaController.php';
    crearTasca();
    exit;
}

if ($action === 'nova') {
    require_once __DIR__ . '/../controllers/TascaController.php';
    formulariNova();
    exit;
}

if ($action === 'categories') {
    require_once __DIR__ . '/../controllers/CategoryController.php';
    llistarCategories();
    exit;
}

require_once __DIR__ . '/../controllers/TascaController.php';
llistarTasques();
