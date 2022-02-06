<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CafLearning - Connexion</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleLogin.css">
</head>

<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <?php
    if (isset($_SESSION['mail'])) {
    ?>
        <form method="POST" action="logout.php">
            <div class="imgandtext">
                <img src="caf-logo.jpg" alt="logo" id="caf-logo">
                <h3 style="margin-top: 25px;">Vous êtes connecté en tant que <?php echo $_SESSION['mail'] ?></h3>
            </div>

            <button name="submit">Déconnexion</button>
        <?php
    } else {
        ?>
            <div class="left-part">
                <img src="data/logos/logolong.svg" alt="">
                <h1>
                    Bienvenue à nouveau !
                </h1>

            </div>

            <div class="right-part">
            <h1>Connectez-vous</h1>
                    <p>Connectez-vous avec les identifiants fournis par votre responsable pédagogique. </p>
                <form method="POST" action="login.php">
                    

                    <label for="username">Identifiant</label>
                    <input type="mail" placeholder="Votre email" id="username" name="mail" required>

                    <label for="password">Mot de Passe</label>
                    <input type="password" placeholder="Mot de passe" id="password" name="password" required>

                    <p id="forget-id">Identifiant / mot de passe oublié ?</p>

                    <button name="submit">Connexion</button>

                    <div class="change-wtc">
                        <p>Pas de compte ? </p>
                        <p>Inscrivez-vous</p>
                    </div>

                </form>

            </div>

        <?php
    }
        ?>


</body>

</html>