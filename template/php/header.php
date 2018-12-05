<?php
/**
 * Created by PhpStorm.
 * User: tvoronyu
 * Date: 10/28/18
 * Time: 1:05 PM
 */
// print_r($_SESSION);

?>
<!DOCTYPE html>
<html style="height: 100vh">
<head>
    <meta charset="UTF-8">
    <title>Camagru</title>
    <link rel="stylesheet" href="/css/style/style.css" type="text/css">
    <link rel="stylesheet" href="/css/style/muuri.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="js.js"></script> -->
</head>
<body style="height: calc(100vh - 56px)">
<nav class="navbar navbar-expand bg-dark d-flex justify-content-between">
    <ul class="navbar-nav">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
    </ul>
    <ul class="navbar-nav">
        <!-- <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') :?>
            <li class="nav-item"><a href="/camera" class="nav-link">Creat new Photo</a></li>
        <?php endif; ?> -->
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') :?>
        <li class="nav-item"><a href="/test" class="nav-link">Test_complect</a></li>
        <?php endif; ?>
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == '') :?>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="/signup" class="nav-link">SignUp</a></li>
        <?php endif; ?>

        <?php if (!isset($_SESSION['login'])) :?>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="/signup" class="nav-link">SignUp</a></li>
        <?php endif; ?>

        <!-- <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') :?>
        <li class="nav-item"><a href="/users" class="nav-link">Users</a></li>
        <?php endif; ?> -->
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') :?>
        <li class="nav-item"><a href="/notes" class="nav-link">Notes</a></li>
        <?php endif; ?>

       <!--  <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') : ?>
            <li class="nav-item"><a href="/cabinet" class="nav-link">Cabinet</a></li>
        <?php endif; ?> -->

        <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') : ?>
            <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>