<?php require '../../libs/functions.php';
/**
 * Created by PhpStorm.
 * User: David
 * Date: 4/29/2017
 * Time: 11:51 PM
 */

require("../../libs/config.php");
$pageDetails = "file_manager";

include('../../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('../' . D_TEMPLATE . '/header.php');
include('../' . D_TEMPLATE . '/sidebar.php');
?>

<link href="/css/file_manager.css" rel="stylesheet">

<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1>File Manager</h1>

    <div class="file-container">
        <iframe  width="765" height="550" frameborder="0"
                 src="/libs/responsive_filemanager/filemanager/dialog.php?type=0">
        </iframe>
    </div>

</main>

<?php include('../' . D_TEMPLATE . '/footer.php'); ?>
