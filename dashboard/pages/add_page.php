<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/8/2017
 * Time: 3:07 AM
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
    <h1 class="page_title">Create New Page</h1>

    <div class="row">
        <div class="col">
            <form method="post" action="#" id="#">
                <span><h6>Parent Page</h6></span>
                <input id="page_parent" name="page_parent" class="form-control" type="text" readonly>

                <br><span><h6>Page Title</h6></span>
                <input id="page_title" name="page_title" class="form-control" type="text">

                <br><span><h6>Banner Label</h6></span>
                <input id="page_header" name="page_header" class="form-control" type="text">

                <br><span><h6>Banner Image</h6></span>
                <input id="page_image" name="page_image" class="form-control" type="text">

                <br><span><h6>Page Content</h6></span>
                <textarea id="page_body" class="form-control" name="page_body" rows="10" cols="130"></textarea><br>

                <br><input type="submit" class="btn btn-info" value="Create Page">
            </form>
        </div>
    </div>

</main>

<link rel="stylesheet" href="/css/dashboard-modify-page.css">

<?php include('../' . D_TEMPLATE . '/footer.php'); ?>

<script src="/node_modules/tinymce/tinymce.jquery.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#page_body',
        theme: 'modern',
        width: 1000,
        height: 500,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
    });
</script>
