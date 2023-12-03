<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,800,900%7CMontserrat:100,200,300,400,500,600,700,800,900">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="page">
        <header class="section page-header">
            <div class="rd-navbar-wrap" style="height: 219.5px;">
                <nav class="rd-navbar rd-navbar-classic rd-navbar-original rd-navbar-static">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1 toggle-original"><span></span></div>
                    <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-900 toggle-original-elements">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-left">

                            </div>
                            <div class="rd-navbar-aside-right">
                                <div class="group-sm">
                                    <?php
                                    if (isset($_SESSION['loggedIn'])) {
                                    ?>
                                        <a class="button button-sm button-primary-2" href="services/signout-service.php">Logout</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a class="button button-sm button-secondary" href="login.php">Sign In</a>
                                        <a class="button button-sm button-primary-2" href="register.php">Register</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-panel">
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="index.php"><img src="logo.jpg" alt="" width="135" height="135"></a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap toggle-original-elements">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="auctions.php">Auctions</a>
                                        </li>
                                        <?php
                                        if (isset($_SESSION['loggedIn'])) {
                                        ?>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="userprofile.php">Account</a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>