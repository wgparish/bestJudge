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
    <link href="/css/file_input_drag_drop.css" rel="stylesheet">

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">

        <h1>Manage Images</h1>

        <br>

        <div class="row">
            <div class="col">
                <form method="post" action="#" id="#">
                    <div class="form-group files color">
                        <label>Upload Your Image</label>
                        <input type="file" class="form-control" multiple="" name="img_upload">
                    </div>
                    <input type="button" class="btn btn-info" id="submit_btn" name="submit_btn" value="Submit Image">
                </form>
            </div>
        </div>


    </main>


<?php include('../' . D_TEMPLATE . '/footer.php'); ?>