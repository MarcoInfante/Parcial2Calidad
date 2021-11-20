<?php
// index.php
session_start();

// If user is logged in, retrieve identity from session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
    </head>
    <body bgcolor=»#AAD5E1»>
    <body>
        <h1>Home</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Sign in</a>
        <?php else: ?>
        <strong>Welcome, <?= $identity ?></strong> <a href="logout.php">Sign out</a>
        <?php endif; ?>

        <p>
            Ejemplo de pagina web realizada a travez de PHP.
            Ejemplo de deploy en heroku.
        </p>
    </body>
</html>