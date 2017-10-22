<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 8/31/17
 * Time: 5:18 PM
 */

require("libs/config.php");
$pageDetails = "User Profile";

# Session Start
session_start();

# General Page setup
include('libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Change Password
include('libs/change_password.php');

include(D_TEMPLATE . '/header.php');
?>

<link rel="stylesheet" href="css/profile.css" />

<div class="container">


</div>


<?php
include(D_TEMPLATE . '/footer.php');
?>
