
<?php
session_start();
 
if (isset($_POST['submit']))
{
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $db = new PDO('mysql:host=localhost;dbname=connexion_caf', 'root', 'root');
    $sql = "SELECT * FROM user WHERE mail = '$mail' ";
    $result = $db->prepare($sql);
    $result->execute();

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
            
            header('Location: index.php');
            exit();
        }
    }
    else
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(nom, prénom, mail, password) VALUES ('Null','Null','$mail','$password')";
        $req = $db->prepare($sql);
        $req->execute();
        echo "Votre compte a bien été créé. Votre identifiant est $mail.";

    }
}
