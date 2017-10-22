<?php require '../../libs/functions.php';
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 4/29/2017
 * Time: 11:51 PM
 */

require("../../libs/config.php");
$pageDetails = "INDEX-TEMP";

include('../../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('../template/header.php');
include('../template/sidebar.php');
?>


<?php include('../' . D_TEMPLATE . '/footer.php'); ?>