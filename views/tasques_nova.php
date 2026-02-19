<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Nova tasca</title>
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>
<div class="wrapper">
<h1>Nova tasca</h1>
<nav>
    <a href="index.php">Tasques</a> |
    <a href="index.php?action=categories">Categories</a>
</nav>
<?php if (!empty($error_bd)): ?>
<p><strong>Error:</strong> <?= htmlspecialchars($error_bd) ?></p>
<?php endif; ?>
<form method="post" action="index.php?action=crear">
    <p>
        <label for="title">Títol *</label><br>
        <input type="text" id="title" name="title" required maxlength="255" value="<?= htmlspecialchars($_POST['title'] ?? '') ?>">
    </p>
    <p>
        <label for="description">Descripció</label><br>
        <textarea id="description" name="description" rows="4"><?= htmlspecialchars($_POST['description'] ?? '') ?></textarea>
    </p>
    <p>
        <label for="category_id">Categoria</label><br>
        <select id="category_id" name="category_id">
            <option value="">— Cap —</option>
            <?php foreach ($categories as $c): ?>
            <option value="<?= (int) $c['id'] ?>"><?= htmlspecialchars($c['nom']) ?></option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>
        <button type="submit">Crear tasca</button>
        <a href="index.php">Cancel·lar</a>
    </p>
</form>
</div>
</body>
</html>
