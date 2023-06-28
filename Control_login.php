<?php
// info word uit gehaald
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

// checkt of de gebruiker iets heeft ingevuld
if (empty($email) || empty($wachtwoord)){
    // gebruiker krijgt dit te zien als hij niks invuld
    echo " U heeft niks ingevuld";
}

else 
{
    if ($wachtwoord == "team2" && $email == "team2" ) 
{
    
    header("Location: team2.php");
    exit;
}

elseif ($wachtwoord == "admin" && $email == "admin")
{
    
    header("Location: admin.php");
    exit;
}
// gaat naar deze fout pagina als de wachtwoord of email niet goed is
else 
{
    header("Location: inlog2.html");
    exit;
}

}
// checkt of de wachtwoord en email goed is


?>


