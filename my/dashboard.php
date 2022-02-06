<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - CAF</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleDashboard.css">
</head>

<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <?php
    if (isset($_SESSION['mail'])) {
        $firstname = $_SESSION['firstname'];
        $name = $_SESSION['name']; ?>
        <div id="dashboard">
            <div id="navbar">
                <div class="left-navbar">
                    <img src="../caf-logo.jpg" alt="logo" id="caf-logo">
                    <h3>Mon dashboard</h3>
                </div>
                <div class="right-navbar">
                    <img src="../avatar.png" alt="logo" id="avatar">
                    <h3>Bonjour <?php echo $firstname . " " . $name ?></h3>
                </div>
            </div>
            <form method="POST" action="../logout.php">

                <div class="imgandtext">

                    <h3 style="margin-top: 25px;">Vous êtes connecté en tant que <?php echo $_SESSION['mail'] ?></h3>
                </div>

                <button name="submit">Déconnexion</button>
            <?php
        } else {
            ?>
                <form method="POST" action="../index.php">
                    <div class="imgandtext">
                        <img src="../caf-logo.jpg" alt="logo" id="caf-logo">
                        <h3>Merci de vous connecter afin d'accéder à cette page</h3>
                    </div>

                    <button name="submit">Page de connexion</button>

                </form>
            <?php
        }
            ?>

        
        </div>



</body>

</html>