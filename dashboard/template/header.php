<?php
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 7/14/2017
 * Time: 11:42 PM
 */

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard - ACM</title>

    <!-- Bootstrap core CSS -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="/css/default.css" rel="stylesheet">

</head>
<body>

<!-- Place code below here -->

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../index.php">Kennesaw ACM</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($pageDetails=='index'){echo 'active';} ?>">
                <a class="nav-link" href="/dashboard/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($pageDetails=='file_manager'){echo 'active';} ?>">
                <a class="nav-link" href="/dashboard/file_manager/index.php">File Manager</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
        </ul>


        <ul class="nav navbar-nav">
            <?php
            if (isLoggedIn()) {
                echo '<li class="nav-item">';
                echo '<buton id="btn-debug" class="btn btn-default nav-link"><i class="fa fa-bug"></i></buton>';
                echo '</li>';

                echo '<li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" id="dropdown01"
                               aria-haspopup="true" aria-expanded="false">' . $user['fullname_reverse'] . '</a>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdown01">';


                echo '<a class="dropdown-item" href="../login.php">Login (Test)</a>';
                echo '<a class="dropdown-item" href="../dashboard/index.php">Admin Dashboard</a>';
                echo '<a class="dropdown-item" href="#">Account Settings</a>';
                echo '<a class="dropdown-item" href="/logout.php">Logout</a>';
                echo '</div>';
                echo '</li>';
            } else {
                echo '<li class="nav-item pull-right"><a class="nav-link" href="../login.php">Login</a></li>';
            }
            ?>
        </ul>

        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
