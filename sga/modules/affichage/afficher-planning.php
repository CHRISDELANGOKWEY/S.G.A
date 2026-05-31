<?php
require_once __DIR__ . '/../../config/config.php';
$planning = json_decode(file_get_contents(PLANNING_FILE), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Planning SGA</title>
    <link rel="stylesheet" href="/sga/assets/css/style.css">
</head>
<body>
    <h1>📅 Planning des cours</h1>
    <a href="/sga/index.php">← Retour</a>
    
    <table border="1">
        <tr><th>Cours</th><th>Groupe</th><th>Salle</th><th>Jour</th><th>Heure</th></tr>
        <?php foreach ($planning as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['cours']) ?></td>
            <td><?= htmlspecialchars($p['groupe']) ?></td>
            <td><?= htmlspecialchars($p['salle']) ?></td>
            <td><?= htmlspecialchars($p['jour']) ?></td>
            <td><?= htmlspecialchars($p['heure_debut']) ?> – <?= htmlspecialchars($p['heure_fin']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>