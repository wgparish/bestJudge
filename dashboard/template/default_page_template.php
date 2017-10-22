<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/3/2017
 * Time: 8:51 PM
 */

require("../../libs/config.php");
$pageDetails = "manage_pages";

include('../../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('../template/header.php');
include('../template/sidebar.php');
?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1 class="page_title">Change me</h1>
    </main>

<?php include('../' . D_TEMPLATE . '/footer.php'); ?>