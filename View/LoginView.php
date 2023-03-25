<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']);
         ?>
    <?php endif; ?>

    <form action="login1.php" method="post">
        <label for="email"  >Adresse email:</label>
        <input type="email" id="email" name="email" class="box" placeholder="enter you email" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password"  class="box" placeholder="enter your password" required><br>

        <input type="submit" class="btn" value="Se connecter">
        <p>you don't have an account? <a href="SigninView.php">Register now</a></p>
    </form>
</body>
</html>