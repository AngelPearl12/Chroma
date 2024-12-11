<?php
include 'database.php';
include 'header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <form method="POST" action="login_handler.php">
            <h2>Login</h2>
            <label for="email">Email Address</label>    
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

            <button type="submit">Log In</button>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </main>
</body>

<?php include 'footer.php'; ?>