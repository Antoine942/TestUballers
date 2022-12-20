<?php


session_start(); 

$user = 'root';
$password = ''; 
$database = 'testuballers'; 
$port =3306; 
$mysqli = new mysqli('localhost', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

@$Prenom = $_POST['prenom'];
@$Nom = $_POST['nom'];
@$email = $_POST['email-mobile'];
@$email2 = $_POST['confirm-email-mobile'];
@$Password=$_POST['new-password'];
@$password2=$_POST['mdp'];
$errors = array(); 
@$Prenom2 = $_POST['Prenom2'];




if (isset($_POST["regSubmit"])) { 
    if (empty($Prenom)) 
    { 
        array_push($errors, "-Un prénom est requis"); 
    }
    if (empty($Nom)) 
    { 
        array_push($errors, "-Un nom est requis"); 
    }
    if (empty($email)) 
    { 
        array_push($errors, "-Un email ou un numéro de mobile est requis"); 
    }
    if ($email != $email2) 
    {
        array_push($errors, "-Les emails ou les numémors de mobile ne sont pas identiques");
    }   

    $sql = "SELECT * FROM membre";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            if ($row) {
                if ($row['email'] === $email) 
                {
                  array_push($errors, "-Le numéro ou l'adresse mail est déjà utilisé");
                }
              }
        }

        if (count($errors) == 0)
        {
           
            $query = "INSERT INTO `membre`(`Prenom`, `Nom`, `email`, `password`) VALUES ('$Prenom','$Nom','$email','$Password')";
            $result = $mysqli->query($query);
            $_SESSION['Prenom2'] = $Prenom;
            $_SESSION['success'] = "Bonjour"; 
        
        }   
} 


}


if (isset($_POST["logSubmit"])) 
{
    if (empty($Prenom2)) {
        array_push($errors, "Mauvaise adresse mail ou numéro de mobile");
    }
    if (empty($password2)) {
        array_push($errors, "Le mot de passe est requis pour la connexion");
    }

    if (count($errors) == 0)
    {
        $query="SELECT * FROM membre WHERE email='$Prenom2' AND password='$password2'";
        $result = $mysqli->query($query);
        if (mysqli_num_rows($result) == 1) 
        {
            while($row = $result->fetch_assoc())
            {
                $Prenom2=$row['Prenom'];
            }
            $_SESSION['Prenom2'] = $Prenom2;
            $_SESSION['success'] = "Bonjour";
        }
          else 
          {
              array_push($errors, "Mauvais email/numéro ou mot de passe");
          }
    }
}

if (!isset($_SESSION['Prenom2'])) {
    $_SESSION['msg'] = "Vous devez d'abord vous connecter";

}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Prenom2']);
	header("location: index.php");

}
?>