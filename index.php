<?php

$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'testuballers'; //To be completed to connect to a database. The database must exist.
$port =3306; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);

@$Prenom = $_POST['prenom'];
@$Nom = $_POST['nom'];
@$email = $_POST['email-mobile'];
@$email2 = $_POST['confirm-email-mobile'];
@$Password=$_POST['new-password'];
@$password2=$_POST['mdp'];

$errors = array(); 
@$Prenom2 = $_POST['Prenom2'];

include('server.php');


if ($mysqli->connect_error) 
{
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


?>

<!DOCTYPE html>
    <head>

        <title>Test Uballers</title>


        <link rel="stylesheet" href="main.css">
    </head>

    <body>
    <?php  if (isset($_SESSION['Prenom2'])) { ?>
        <div class="header"> 
            <div class="connected">
            Bonjour
            <?php 
                echo $_SESSION['Prenom2'];

            ?>            
        <a href="index.php?logout='1'" style="color: white;"> Se deconnecter</a>
        </div>
          </div>

    <?php } 
            else {
    ?>
            <form action="" class="header" method="post">
                <div class="login">
                    Adresse e-mail ou mobile<br>
                    <input type="text" name="Prenom2" placeholder="Votre login">
                </div>
                <div class="password">
                    Mot de Passe <br>
                    <input type="password" name="mdp" placeholder="Votre mot de passe"><br>
                    <div class="oublie">Informations de compte oubliées ?</div>
                </div>
                <div class="connexion"><button class="button" type="submit" href="#" name="logSubmit">Connexion</button>
</div>
            </form>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) : ?>
      <div class="succes" >
      	<h3>
          <?php 
          	unset($_SESSION['success']);        
          ?>
      	</h3>
      </div>
  	<?php endif ?>
        <div class="main">
            <div class="title">Inscription</div>
            C'est gratuit(et ça le restera toujours)

            <form class="register-form" action="" method="post">

                <input type="text" name="prenom" placeholder="Prénom" style="width: 160px"><input type="text" name="nom" placeholder="Nom de famille" style="width: 160px"><br>
                <input type="text" name="email-mobile" placeholder="Numéro de mobile ou email" style="width: 327px"><br>
                <input type="text" name="confirm-email-mobile" placeholder="Confirmer numéro de mobile ou email" style="width: 327px"><br>
                <input type="text" name="new-password" placeholder="Nouveau mot de passe" style="width: 327px"><br>
                    <?php include('error.php'); ?>
                <div class="age">
                    Date de naissance <br>
                    <div class="align">                    
                        <select title="Jour" class="selecteur">
                        <option value="0" selected="1">Jour</option>
                        <option value="1">1</option></select>
                        <select title="Mois" class="selecteur">
                        <option value="0" selected="1">Mois</option>
                        <option value="1">Janv</option></select>
                        <select title="Année" class="selecteur">
                        <option value="0" selected="1">Année</option>
                        <option value="2000">2000</option>
                        </select>
                        <div class="info">Pourquoi indiquer ma date de naissance ?</div> 
                    </div>

                </div>

                <div class="sex-selection">
                    <span class=radio><input type="radio" name="gender" value="femme"> Femme</span>
                    <span class=radio><input type="radio" name="gender" value="homme"> Homme</span>
                </div>

            <div class="endtext">
                En cliquant sur Inscription, vous acceptez nos <a>Conditions</a> et indiquez que vous aez lu notre <a>Politique d'utilisation des données</a>, y compris notre <a>Utilisation des cookies</a>. Vous pourrez recevoir des notification par texto de la part de Facebook et pouvez vous desabonner à tout moment.<br>

                <button class="submit" type="submit" href="#" name="regSubmit">Inscription</button>
            </div>
            </form>
        </div>
    
        <script src=""></script>
    </body>
</html>