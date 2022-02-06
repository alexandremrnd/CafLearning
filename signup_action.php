
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
        
            echo "Un compte avec ces identifiants existe déjà. Essayez de vous connecter.";
            
            header('Location: index.php');
            exit();
        
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
