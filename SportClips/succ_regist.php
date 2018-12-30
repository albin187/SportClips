<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/custom.css">
</head>
<body>




<?php
/**
 * Created by PhpStorm.
 * User: Albin Ademi
 * Date: 23.12.2018
 * Time: 15:32
 */

session_start();
$con = mysqli_connect('lielgips.mysql.db.hostpoint.ch','lielgips_omer2','PMfU3PL6','lielgips_omer2'); //lielgips_omer2 erstellte DB von Omer für mich(Albin)
//Verbindungstest
/*if (!$con)
{
    echo'Nicht Verbunden zum Server: '.mysqli_connect_error();
}

else {
    echo 'Erfolgreich verbunden!';
}*/

$username = $_POST['username'];
$email = $_POST ['email'];
$psw = $_POST ['password'];
$type  = $_POST ['type'];

$sql = "INSERT INTO TUsers (UsUsername, UsEmail, UsPasswort, UsArt) VALUES ('$username','$email','$psw','$type')";

/*if (!mysqli_query($con,$sql)) {
    echo 'Not inserted';
} else {
    echo 'Inserted';
}*/
header("refresh:10; url=index.php");

?>

<?php
/*
*/
?>
<h1 style="text-align: center; margin-top: 1vw;">Wilkommen bei Sportclips <?php
    echo $_POST["username"]; ?></h1>
<br>
<h2>Sie wurden erfolgreich in die Datenbank aufgenommen</h2>
<br>
<h3>Sie werden in 10 Sekunden weitergeleitet... <?php
    ?></h3>

</body>
</html>
