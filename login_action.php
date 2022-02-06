
<?php
session_start();
?>
<!DOCTYPE html>
<html lang=en">

<head>
    <title>CafLearning - Connexion</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleLogin.css">
</head>

<body>

<?php
if (isset($_POST['submit']))
{
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $db = new PDO('mysql:host=localhost;dbname=connexion_caf', 'root', 'root');
    $sql = "SELECT * FROM user WHERE mail = '$mail' ";
    $result = $db->prepare($sql);
    // $result->execute();

    if (!$result->execute()) {
        print_r($result->errorInfo());
    }

    if($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($password, $data[0]['password']))
        {
           echo "Connexion effectuée. Redirection en cours...";
           $_SESSION['mail'] = $mail;
           $_SESSION['firstname'] = $data[0]['firstname'];
           $_SESSION['name'] = $data[0]['name'];
           header('Location: my/dashboard.php');
           exit();
        }
        else
        {
            echo "Email ou mot de passe incorrect";
            
            exit();
        }
    }
    else
    {
        echo "<div style=\"height: 25vh; display: flex; flex-direction: column; justify-content: space-around; align-items: center; text-align: center;\">";
        echo "<img src=\"data/logos/logolong.svg\" alt=\"logo\" id=\"logo\" style=\"position: static;\">";
        echo "<p>Nous ne trouvons pas de compte avec comme identifiant <span class='important-text'>$mail.</span> Vous devez donc tout d'abord vous inscrire :</p>";
        echo "<a href='signup.php' style=\"margin-top: 5vh;\">S'inscrire</a>";
        echo "</div>";

    }
}
?>

</body>

</html>