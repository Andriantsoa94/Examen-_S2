<?php
include "../include/fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <title>Login</title>
</head>
<body class="login-page">
<form action="traitelog.php" method="post" class="form">
    <p class="form-title">Sign in to your account</p>
    <div class="input-container">
        <input type="email" name="mail" placeholder="Email">
    </div>
    <div class="input-container">
        <input type="password" name="pass" placeholder="Password">
    </div>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
        <p class="error">Please try again</p>
    <?php } ?>
    <button type="submit">Connect</button>
    <p class="signup-link">Don't have an account? <a href="creer.php">Sign up</a></p>

</form>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>