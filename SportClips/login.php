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

<h1>Wilkommen bei SportClips!</h1>
<h2>Bitte melden Sie sich an.</h2>
<p>
    Neu bei SportClips? Registrieren Sie sich jetzt <a href="regist.php"> hier:</a>
</p>
<p>
    Nutzen Sie SportClips auch als <a href="index.php">Gast.</a>
</p>

<style>
    h1 {
        text-align: center;
        margin-top: 5%;
        font-weight: bold;
    }
    h2 {
        text-align: center;
    }
    p {
        text-align: center;
        font-size: 100%;
    }

    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>

<div class="container">
    <form action="succ_login.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="fname">Username:</label>
            </div>
            <div class="col-75">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Passwort:</label>
            </div>
            <div class="col-75">
                <input type="password" id="password" name="password" placeholder="Passwort" required style="width:100%">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Anmelden">
        </div>
    </form>
</div>

<footer></footer>
</body>

</html>

<?php
if(isset($_POST['submit'])){
if (!isset($_POST['username'])) $error[] = "Please fill out all fields";
if (!isset($_POST['password'])) $error[] = "Please fill out all fields";
$username = $_POST['username'];
if ( $user->isValidUsername($username)){
if (!isset($_POST['password'])){
$error[] = 'A password must be entered';
}
$password = $_POST['password'];
if($user->login($username,$password)){
$_SESSION['username'] = $username;
header('Location: homelogged.php');
exit;
} else {
$error[] = 'Wrong username or password or your account has not been activated.';
}
}else{
$error[] = 'Usernames are required to be Alphanumeric, and between 3-16 characters long';
}
}//end if submit
//define page title
$title = 'Login';
//include header template
require('layout/header.php');
?>
