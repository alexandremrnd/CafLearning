<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CafLearning - Inscription</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleSignUp.css">
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
                    Plus que quelques formalités...
                </h1>

            </div>

            

            </div>

            <div class="right-part">
                <img src="data/logos/logolong.svg" alt="logo" id="logo">
                <h1>Inscrivez-vous</h1>
                <p>Inscrivez-vous en saisissant les informations demandées ci-dessous. </p>
                <form method="POST" action="signup_action.php">

                    <div class="flex-items">
                        <div class="left-part">
                            <h2>Vos identifiants</h2>
                            <p>Nous vous conseillons de conserver ces identifiants en lieu sûr, et de privilégier un mot de passe unique pour ce site.</p>

                            <label for="username">Identifiant</label>
                            <input type="mail" placeholder="johndoe@mail.com" id="username" name="mail" required>

                            <label for="password">Mot de Passe</label>
                            <input type="password" placeholder="●●●●●●●●●●" id="password" name="password" required>

                            <label for="repassword">Mot de Passe (confirmation)</label>
                            <input type="password" placeholder="●●●●●●●●●●" id="repassword" name="repassword" required>
                        </div>

                        <div class="right-part">
                            <h2>Qui êtes-vous ?</h2>
                            <p>Afin de mieux traiter votre demande et de vous identifier, ces informations personnelles doivent être rennsignées avec soin.</p>

                            <label for="firstname">Prénom</label>
                            <input type="text" placeholder="John" id="firstname" name="firstname" required>

                            <label for="text">Nom</label>
                            <input type="text" placeholder="Doe" id="name" name="name" required>
                        </div>
                    </div>


                    <div class="flex-items">

                        <div class="change-wtc">
                            <p>Déjà titulaire d'un compte ? </p>
                            <p><a href="login.php">Connectez-vous</a></p>
                        </div>
                        <button name="submit">S'inscrire</button>


                    </div>


                </form>

            </div>
        <?php
    }
        ?>


</body>

</html>