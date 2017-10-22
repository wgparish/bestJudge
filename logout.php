<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 9:59 PM
 */

# Start Session
session_start();

# Process Logout
unset($_SESSION['email']); // Deletes the email key
session_destroy();  // Deletes all of the session keys

# Redirect to login
header('Location: login.php');
