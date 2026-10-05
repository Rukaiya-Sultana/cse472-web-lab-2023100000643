<?php

require "db.php";

$fullName = trim($_POST["full_name"] ?? "");
$studentId = trim($_POST["student_id"] ?? "");
$email = trim($_POST["email"] ?? "");
$department = trim($_POST["department"] ?? "");
$workshop = trim($_POST["workshop"] ?? "");
$expectation = trim($_POST["expectation"] ?? "");

if ($fullName === "" || $studentId === "" || $email === "" || $department === "" || $workshop === "") {
    $message = "Please complete all required fields.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "Please enter a valid email address.";
} else {
    try {
        $sql = "INSERT INTO registrations
                (full_name, student_id, email, department, workshop, expectation)
                VALUES
                (:full_name, :student_id, :email, :department, :workshop, :expectation)";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            ":full_name" => $fullName, ":student_id" => $studentId,
            ":email" => $email, ":department" => $department,
            ":workshop" => $workshop, ":expectation" => $expectation
        ]);
        $saved = true;
    } catch (PDOException $error) {
        $message = "Registration could not be saved. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Registration Result</title><link rel="stylesheet" href="css/style.css"></head>
<body><header><div class="header-content"><p class="lab-label">CSE472 · Lab 07</p><h1>Student Workshop Registration System</h1></div></header><main><section class="card result-card">
<?php if (isset($saved)): ?>
    <h2>Registration Saved</h2>
    <p>Thank you, <?= htmlspecialchars($fullName, ENT_QUOTES, "UTF-8") ?>. Your registration has been saved.</p>
    <p><a href="registrations.php">View Saved Registrations</a></p><p><a href="index.php">Submit Another Registration</a></p>
<?php else: ?>
    <h2>Registration Error</h2><p class="error-message"><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></p><p><a href="index.php">Back to Registration Form</a></p>
<?php endif; ?>
</section></main></body></html>
