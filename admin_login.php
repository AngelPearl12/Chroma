<?php
include 'database.php';
include 'header.php';
?>

<body>
    <main>
        <form method="POST" action="handler_login.php">
            <h2>Admin Login</h2>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <a href="admin_dashboard.php" class="avail-btn">Login</a>
        </form>
    </main>
</body>

<?php include 'footer.php'; ?>
