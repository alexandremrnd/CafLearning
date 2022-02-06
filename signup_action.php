
<?php
session_start();

?>
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
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $db = new PDO('mysql:host=localhost;dbname=connexion_caf', 'root', 'root');
    $sql = "SELECT * FROM user WHERE mail = '$mail' ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {

        echo "<div style=\"height: 25vh; display: flex; flex-direction: column; justify-content: space-around; align-items: center; text-align: center;\">";
        echo "<img src=\"data/logos/logolong.svg\" alt=\"logo\" id=\"logo\" style=\"position: static;\">";
        echo "<p>$firstname, un compte avec ces identifiants <span class='important-text'>existe déjà.</span></p> <p>Essayez de vous connecter vie le bouton suivant :</p>";
        echo "<a href='login.php' style=\"margin-top: 5vh;\">Se connecter</a>";
        echo "</div>";


        exit();
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(name, firstname, mail, password) VALUES ('$name','$firstname','$mail','$password')";
        $req = $db->prepare($sql);
        $req->execute();

        echo "<div style=\"height: 25vh; display: flex; flex-direction: column; justify-content: space-around; align-items: center; text-align: center;\">";
        echo "<img src=\"data/logos/logolong.svg\" alt=\"logo\" id=\"logo\" style=\"position: static;\">";
        echo "<p>$firstname, votre compte a bien été créé. Votre identifiant est </p><p class='important-text'>$mail.</p>";
        echo "<a href='login.php' style=\"margin-top: 5vh;\">Se connecter</a>";
        echo "</div>";
    }
} else {
    header('Location: signup.php');
}
?>
</body>
</html>