?php

$good_username = "bob";
$good_password = "super-secret";

if($_POST["username"] == $good_username && $_POST["password"]==$good_password) {  
  echo "Vous etes connecté !";
} else {
  echo "Mauvais nom d'utilisateur ou mot de passe.";
}
?>
