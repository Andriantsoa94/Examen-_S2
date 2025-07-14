<?php
include "../include/fonction.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="register-page">


<div class="ins">
    <form action="insert.php" method="post">
        <h1>Creer un compte</h1>

        <label for="mail">Mail</label>
        <input type="email" name="mail" require>

        <label for="nom">Name</label>
        <input type="text" name="nom" require>

        <label for="ville">Ville</label>
        <input type="text" name="ville" require>

        <label for="sexe">Sexe</label>
        <select name="sexe" require>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>

        <label for="pass">Password</label>
        <input type="password" name="pass" require>

        <label for="dtn">Date de naissance</label>
        <input type="date" name="dtn" require>

        <div class="btn">
            <button type="submit">Register</button>
            <a href="index.php" class="button-link">I have an account</a>
        </div>

        <?php if (isset($_GET['error'])) { ?>
            <p>ERROR</p>
        <?php } ?>
    </form>
</div>

<link rel="stylesheet" href="../assets/css/style.css">
</body>
</html>

