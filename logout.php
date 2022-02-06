
<?php
session_start();
unset($_SESSION['mail']);
echo "Déconnexion confirmée. Redirection en cours ...";
header('Location: index.php');
exit();
?>
