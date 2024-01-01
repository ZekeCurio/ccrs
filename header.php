<?php
ob_start();
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['logged_in'])) { ?>
                            <a href="process.php?logout" class="nav-link">Logout</a>
                        <?php } else { ?>
                            <a href="login.php" class="nav-link">Login</a>
                        <?php } ?>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar end -->