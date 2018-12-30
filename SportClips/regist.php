

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
<h2>Bei Sportclips registrieren!</h2>

<style>

    h2 {
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }

    .mail{
        width: 100%;
    }
</style>


<form action="succ_regist.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="container">
        <p>Füllen Sie bitte folgende Felder aus: </p>
        <hr>

        <label for="usr"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Email" name="email" class="mail" required>

        <label for="psw"><b>Passwort</b></label>
        <input type="password" placeholder="Passwort" name="password" required>

        <label for="email"><b>Was sind Sie?</b></label>
        <select name="type" required>
            <option value="schueler">Schueler</option>
            <option value="lehrer">Lehrer</option>
        </select>
        <hr>
        <p>Durch die Registrierung stimmen Sie unseren <a href="agb.php">Nutzungsbedingungen</a> zu.</p>

        <button type="submit" class="registerbtn">Registrieren</button>
    </div>

<footer></footer>
</body>
</html>
