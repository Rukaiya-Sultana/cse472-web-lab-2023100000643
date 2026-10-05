<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Workshop Registration System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-content">
            <p class="lab-label">CSE472 · Lab 07</p>
            <h1>Student Workshop Registration System</h1>
            <p>Register for a practical web development workshop.</p>
        </div>
    </header>
    <main>
        <section class="card">
            <h2>Registration Form</h2>
            <form action="save_registration.php" method="POST">
                <div class="form-grid">
                    <div class="form-group"><label for="full_name">Full Name</label><input type="text" id="full_name" name="full_name" required></div>
                    <div class="form-group"><label for="student_id">Student ID</label><input type="text" id="student_id" name="student_id" required></div>
                    <div class="form-group"><label for="email">Email Address</label><input type="email" id="email" name="email" required></div>
                    <div class="form-group"><label for="department">Department</label><select id="department" name="department" required><option value="">Select Department</option><option value="CSE">CSE</option><option value="EEE">EEE</option><option value="Textile Engineering">Textile Engineering</option><option value="English">English</option><option value="BBA">BBA</option></select></div>
                    <div class="form-group full-width"><label for="workshop">Workshop</label><select id="workshop" name="workshop" required><option value="">Select Workshop</option><option value="HTML and CSS Foundations">HTML and CSS Foundations</option><option value="JavaScript Basics">JavaScript Basics</option><option value="PHP and MySQL Basics">PHP and MySQL Basics</option><option value="Database Foundations">Database Foundations</option></select></div>
                    <div class="form-group full-width"><label for="expectation">What do you expect to learn?</label><textarea id="expectation" name="expectation" rows="5"></textarea></div>
                </div>
                <button type="submit">Submit Registration</button>
            </form>
        </section>
        <p class="navigation-link"><a href="registrations.php">View Saved Registrations</a></p>
    </main>
</body>
</html>
