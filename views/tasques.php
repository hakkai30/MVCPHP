<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llistat de tasques</title>
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>
<div class="wrapper">
<h1>Llistat de tasques</h1>
<nav>
    <a href="index.php">Tasques</a> |
    <a href="index.php?action=nova">Nova tasca</a> |
    <a href="index.php?action=categories">Categories</a>
</nav>
<?php if (!empty($error_bd)): ?>
<p><strong>Error:</strong> <?= htmlspecialchars($error_bd) ?></p>
<?php endif; ?>
<?php if (!empty($tasques)): ?>
<table>
    <thead>
        <tr><th>Títol</th><th>Descripció</th><th>Categoria</th></tr>
    </thead>
    <tbody>
    <?php foreach ($tasques as $t): ?>
        <tr>
            <td><strong><?= htmlspecialchars($t['title']) ?></strong></td>
            <td><?= nl2br(htmlspecialchars($t['description'] ?? '')) ?></td>
            <td><?= htmlspecialchars($t['category_nom'] ?? '—') ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p>No hi ha tasques. <a href="index.php?action=nova">Crear la primera</a></p>
<?php endif; ?>
</div>
</body>
</html>
