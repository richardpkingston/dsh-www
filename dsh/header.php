<?php
    header('Location: http://www.digital-solutions.uk/', true, 301);
    exit();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>NERC Digital Solutions Programme @ The University of Machester</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <!--link rel="stylesheet" href="css/sticky-footer.css" type="text/css"-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' type='text/css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' type='text/css'>
    <script src="https://kit.fontawesome.com/9d2649a44b.js"></script>
</head>
<body class="d-flex flex-column h-100">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="https://www.manchester.ac.uk/" target="_blank"><img src="img/uom_logo.png" alt="The University of Manchester"
                                                                                      style="height:70px;"/></a>
        <a class="navbar-brand" href="https://nerc.ukri.org/" target="_blank"><img src="img/nerc_logo.png" alt="NERC" style="height:70px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-uppercase py-4 py-lg-0 ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">The Programme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="background.php">Background</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#team">Team</a>
                </li>
                <li class="navbar-item">
                    <a class="nav-link" href="jobs.php">DSH jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.digitalfutures.manchester.ac.uk/" target="_blank"><i class="fas fa-external-link-alt"
                                                                                                              aria-hidden="true"></i> Digital Futures @ UoM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/NERCdsh" target="_blank"><i class="fas fa-external-link-alt" aria-hidden="true"></i> <i
                                class="fa fa-twitter" aria-hidden="true"></i> @NERCdsh</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
