<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CafLearning - Bienvenue</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleHome.css">
</head>

<body>


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
                <h2>
                    La plateforme en ligne d'apprentissage de la Caf.
                </h2>

                <p>Cette plateforme vous permettra d'acquérir de nouvelles compétences, mais avant cela, il est nécessaire de vous identifier :</p>
                <div class="flex-items">
                    <a href="login.php">Se connecter</a>
                    <a href="signup.php">S'inscrire</a>
                </div>

            </div>



        <?php
    }
        ?>


</body>

</html>