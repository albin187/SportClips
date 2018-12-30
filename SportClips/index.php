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

<div class="jumbotron">
    <div class="container text-center">
        <h1>sPORTcLIPs</h1>
        <p>Clips, Spass und Freude</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">SportClips</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Videos</a></li>
                <li><a href="add.php">Hinzufügen</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php /*echo $_POST["username"] */?></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-inline">
        <input type="email" class="form-control" size="30" placeholder="Tags">
        <button type="button" class="btn btn-primary">Suchen</button>
    </form>
</div>
<br><br>


<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">sportkrass.mp4</div>
                <div class="panel-body"><video src="vid/Diskus.mp4" class="img-responsive" style="width:100%;" controls></div>
                <div class="panel-footer">
                    <span class="badge badge-primary">Hochsprung</span>
                    <span class="badge badge-primary">1M</span>
                    <span class="badge badge-primary">Haha</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">sportkrass.mp4</div>
                <div class="panel-body"><video src="vid/greg.mp4" class="img-responsive" style="width:100%;" controls></div>
                <div class="panel-footer">
                    <span class="badge badge-primary">Hochsprung</span>
                    <span class="badge badge-primary">1M</span>
                    <span class="badge badge-primary">Haha</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">sportkrass.mp4</div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=VIDEO" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">
                    <span class="badge badge-primary">Hochsprung</span>
                    <span class="badge badge-primary">1M</span>
                    <span class="badge badge-primary">Haha</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">sportkrass.mp4</div>
                <div class="panel-body"><video src="vid/Impressionen.mp4.mp4" class="img-responsive" style="width:100%;" controls></div>
                <div class="panel-footer">
                    <span class="badge badge-primary">Hochsprung</span>
                    <span class="badge badge-primary">1M</span>
                    <span class="badge badge-primary">Haha</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">sportkrass.mp4</div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=VIDEO" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">
                    <span class="badge badge-primary">Hochsprung</span>
                    <span class="badge badge-primary">1M</span>
                    <span class="badge badge-primary">Haha</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">sportkrass.mp4</div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=VIDEO" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">
                    <span class="badge badge-primary">Hochsprung</span>
                    <span class="badge badge-primary">1M</span>
                    <span class="badge badge-primary">Haha</span>
                </div>
            </div>
        </div>
    </div>
</div><br><br>

<div class="bg-modal">
    <div class="modal-contents">

        <div class="close">+</div>
        <img src="https://richardmiddleton.me/comic-100.png" alt="">

        <form action="">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="E-Mail">
            <a href="#" class="button">Submit</a>
        </form>

    </div>
</div>

<!-- Footer -->
<footer>


    © 2018 Copyright: Albin Ademi

</footer>
<!-- Footer -->

</body>
</html>
<?php
/*
*/?>