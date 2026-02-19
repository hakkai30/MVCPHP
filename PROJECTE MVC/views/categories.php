<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llistat de categories</title>
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>
<div class="wrapper">
<h1>Llistat de categories</h1>
<nav>
    <a href="index.php">Tasques</a> |
    <a href="index.php?action=nova">Nova tasca</a>
</nav>
<?php if (!empty($error_bd)): ?>
<p><strong>Error:</strong> <?= htmlspecialchars($error_bd) ?></p>
<?php endif; ?>
<?php if (!empty($categories)): ?>
<ul>
    <?php foreach ($categories as $c): ?>
    <li><?= htmlspecialchars($c['nom']) ?></li>
    <?php endforeach; ?>
</ul>
<?php else: ?>
<p>No hi ha categories.</p>
<?php endif; ?>
<p><a href="index.php">Tornar a tasques</a></p>
</div>
</body>
</html>
