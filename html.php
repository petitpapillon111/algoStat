!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"></script>

    <!--<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

        <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

        <!--<link href="styles.css" rel="stylesheet">-->

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Algos</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="ce-bnp.html">Etape 1</a></li>
                <li><a href="contact.html">Etape 2</a></li>
            </ul>
            <form class="navbar-form navbar pull-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container-fluid">
    <h2 class="subtitle"> AlgoStat</h2>
    <?php include('algoInsertion.php') ?>
    <?php include('algoSelection.php') ?>

    <section>
        <h2 class="subtitle">Representation algos</h2>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </section>


</div>
<footer class="ffirst">
    <div class="row">
        <div class="col-md-3">
            <h6 class="smallh6">Contacts</h6>
            <p><b>Tel: __.__.__.__.__</b><br></br>
                xx, rue xxxxxxxxxxx, 75000 Paris<br>
                xxxxxxxxxx@gmail.com</p>
        </div>
        <div class="col-md-3">
            <h6 class="smallh6">Suivez nous sur les res so</h6>
            <ul class="social">
                <li><a href="#"><img src="Facebook-icon.png" class="first"/></a></li>
                <li><a href="#"><img src="Twitter-icon.png" class="first"/></a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h6 class="smallh6">A propos de nous</h6>
            <p class="psmall">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volu...</p>
        </div>
</footer>
<footer class="flast">

    <p>copyright2017</p>
</footer>
</div>
</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src ="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



</body>

</html>
