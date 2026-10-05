<?php

require "db.php";

$sql = "SELECT id, full_name, student_id, email, department, workshop, created_at
        FROM registrations
        ORDER BY id DESC";
$statement = $pdo->prepare($sql);
$statement->execute();
$registrations = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Saved Registrations</title><link rel="stylesheet" href="css/style.css"></head>
<body><header><div class="header-content"><p class="lab-label">CSE472 · Lab 07</p><h1>Saved Registrations</h1></div></header><main class="wide-main"><section class="card">
<?php if (count($registrations) === 0): ?>
    <p class="empty-message">No registration has been saved yet.</p>
<?php else: ?>
    <div class="table-wrapper"><table><thead><tr><th>ID</th><th>Name</th><th>Student ID</th><th>Email</th><th>Department</th><th>Workshop</th><th>Submitted</th></tr></thead><tbody>
    <?php foreach ($registrations as $registration): ?>
        <tr><td><?= htmlspecialchars((string) $registration["id"], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($registration["full_name"], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($registration["student_id"], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($registration["email"], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($registration["department"], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($registration["workshop"], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($registration["created_at"], ENT_QUOTES, "UTF-8") ?></td></tr>
    <?php endforeach; ?>
    </tbody></table></div>
<?php endif; ?>
</section><p class="navigation-link"><a href="index.php">Back to Registration Form</a></p></main></body></html>
