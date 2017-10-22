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

# Run POST SCRIPT
include('../../libs/modify_home_post.php');

# Page Setup:
include('../template/header.php');
include('../template/sidebar.php');
?>

<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1 class="page_title">Modify Page</h1>

    <h6>Please select a page: </h6>

    <form id="page_select" method="post">

        <select name="page_selection" id="select_page" class="form-control">
            <?php
            if (isset($_POST['page_selection'])) {
                echo '<option selected value="'. $_POST['page_selection'] .'">' . $_POST['page_selection'] . '</option>';
            } else {
                echo '<option selected disabled value="0">Select Page</option>';
            }
            ?>
            <?php
            global $DB;

            $q1 = $DB->query("SELECT * FROM pages;");
            while ($r = $q1->fetch()) {
                echo '<option value="' . $r['title'] . '">' . $r['title'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" class="btn btn-info">
    </form>

    <?php
    if(isset($_POST['page_selection']))
    {
        global $DB;
        $page_selection = $_POST['page_selection'];
        $q = $DB->query("SELECT * FROM pages WHERE title = '$page_selection';");
        $r = $q->fetch();


        if($r['title']=='Home')
        {

            $json = json_decode($r['body']);



    ?>
            <hr class="featurette-divider">

            <form method="post" id="home_page_update">
                <div class="row">
                    <div class="col-md-6">
                        <span><h3>Jumbotron</h3></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Banner 1</p>
                        Image: <input class="form-control" name="homepage_jumbo_item1_image" type="text" value="<?php echo $json->Jumbotron->item_1->image; ?>"><br>
                        Label: <input class="form-control" name="homepage_jumbo_item1_title" type="text" value="<?php echo $json->Jumbotron->item_1->title; ?>"><br>
                        Content: <input class="form-control" name="homepage_jumbo_item1_content" type="text" value="<?php echo $json->Jumbotron->item_1->content; ?>"><br>
                        Link: <input class="form-control" name="homepage_jumbo_item1_link" type="text" value="<?php echo $json->Jumbotron->item_1->link; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <p>Banner 2</p>
                        Image: <input class="form-control" name="homepage_jumbo_item2_image" type="text" value="<?php echo $json->Jumbotron->item_2->image; ?>"><br>
                        Label: <input class="form-control" name="homepage_jumbo_item2_title" type="text" value="<?php echo $json->Jumbotron->item_2->title; ?>"><br>
                        Content: <input class="form-control" name="homepage_jumbo_item2_content" type="text" value="<?php echo $json->Jumbotron->item_2->content; ?>"><br>
                        Link: <input class="form-control" name="homepage_jumbo_item2_link" type="text" value="<?php echo $json->Jumbotron->item_2->link; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <p>Banner 3</p>
                        Image: <input class="form-control" name="homepage_jumbo_item3_image" type="text" value="<?php echo $json->Jumbotron->item_3->image; ?>"><br>
                        Label: <input class="form-control" name="homepage_jumbo_item3_title" type="text" value="<?php echo $json->Jumbotron->item_3->title; ?>"><br>
                        Content: <input class="form-control" name="homepage_jumbo_item3_content" type="text" value="<?php echo $json->Jumbotron->item_3->content; ?>"><br>
                        Link: <input class="form-control" name="homepage_jumbo_item3_link" type="text" value="<?php echo $json->Jumbotron->item_3->link; ?>"><br>
                    </div>
                </div>
                <br>
                <hr class="featurette-divider">
                <div class="row">
                    <div class="col-md-6">
                        <span><h3>Bubble Links</h3></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>Bubble 1</p>
                        Image: <input class="form-control" name="homepage_bubble_item1_image" type="text" value="<?php echo $json->bubble_items->item_1->image; ?>"><br>
                        Label: <input class="form-control" name="homepage_bubble_item1_title" type="text" value="<?php echo $json->bubble_items->item_1->title; ?>"><br>
                        Content: <input class="form-control" name="homepage_bubble_item1_content" type="text" value="<?php echo $json->bubble_items->item_1->content; ?>"><br>
                        Link: <input class="form-control" name="homepage_bubble_item1_link" type="text" value="<?php echo $json->bubble_items->item_1->link; ?>"><br>
                    </div>
                    <div class="col-sm-4">
                        <p>Bubble 2</p>
                        Image: <input class="form-control" name="homepage_bubble_item2_image" type="text" value="<?php echo $json->bubble_items->item_2->image; ?>"><br>
                        Label: <input class="form-control" name="homepage_bubble_item2_title" type="text" value="<?php echo $json->bubble_items->item_2->title; ?>"><br>
                        Content: <input class="form-control" name="homepage_bubble_item2_content" type="text" value="<?php echo $json->bubble_items->item_2->content; ?>"><br>
                        Link: <input class="form-control" name="homepage_bubble_item2_link" type="text" value="<?php echo $json->bubble_items->item_2->link; ?>"><br>
                    </div>
                    <div class="col-sm-4">
                        <p>Bubble 3</p>
                        Image: <input class="form-control" name="homepage_bubble_item3_image" type="text" value="<?php echo $json->bubble_items->item_3->image; ?>"><br>
                        Label: <input class="form-control" name="homepage_bubble_item3_title" type="text" value="<?php echo $json->bubble_items->item_3->title; ?>"><br>
                        Content: <input class="form-control" name="homepage_bubble_item3_content" type="text" value="<?php echo $json->bubble_items->item_3->content; ?>"><br>
                        Link: <input class="form-control" name="homepage_bubble_item3_link" type="text" value="<?php echo $json->bubble_items->item_3->link; ?>"><br>
                    </div>
                </div>
                <br>
                <hr class="featurette-divider">
                <div class="row">
                    <div class="col-md-6">
                        <span><h3>Features</h3></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <p>Feature 1</p>
                        Image: <input class="form-control" name="homepage_features_item1_image" type="text" value="<?php echo $json->features->item_1->image; ?>"><br>
                        Title: <input class="form-control" name="homepage_features_item1_title" type="text" value="<?php echo $json->features->item_1->title; ?>"><br>
                        Content: <br>
                        <textarea class="form-control" name="homepage_features_item1_content" rows="6" cols="70"><?php echo $json->features->item_1->content; ?></textarea>
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row">
                    <div class="col-lg-8">
                        <p>Feature 1</p>
                        Image: <input class="form-control" name="homepage_features_item2_image" type="text" value="<?php echo $json->features->item_2->image; ?>"><br>
                        Title: <input class="form-control" name="homepage_features_item2_title" type="text" value="<?php echo $json->features->item_2->title; ?>"><br>
                        Content: <br>
                        <textarea class="form-control" name="homepage_features_item2_content" rows="6" cols="70"><?php echo $json->features->item_2->content; ?></textarea>
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row">
                    <div class="col-lg-8">
                        <p>Feature 1</p>
                        Image: <input class="form-control" name="homepage_features_item3_image" type="text" value="<?php echo $json->features->item_3->image; ?>"><br>
                        Title: <input class="form-control" name="homepage_features_item3_title" type="text" value="<?php echo $json->features->item_3->title; ?>"><br>
                        Content: <br>
                        <textarea class="form-control" name="homepage_features_item3_content" rows="6" cols="70"><?php echo $json->features->item_3->content; ?></textarea>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Update Page">
            </form>


    <?php
            //$json->features->item_1->title = "test title";
            //$json_to_submit = json_encode($json);

            //$newJson = json_decode($json_to_submit);

        }
        else
        {
            echo '<hr class="featurette-divider">';

            $userID = $r['user'];
            $q3 = $DB->query("SELECT * FROM users WHERE id='$userID'");
            $r3 = $q3->fetch();
            $userName = $r3['first_name'] . ' ' . $r3['last_name'];

            echo '<form method="post" id="normal_page_update">';
            echo '<span><h6>Page ID:</h6></span>';
            echo '<input id="page_id" class="form-control" name="normal_id" type="text" value="'. $r['id'] .'" readonly>';
            echo '<br><span><h6>Created by:</h6></span>';
            echo '<input id="page_user" class="form-control" name="normal_user" type="text" value="' . $userName . '" readonly>';
            echo '<br><span><h6>Parent Page:</h6></span>';
            echo '<input id="page_parent" class="form-control" name="normal_parent" type="text" value="' . $r['parent'] . '" readonly>';
            echo '<br><span><h6>Page Title:</h6></span>';
            echo '<input id="page_title" class="form-control" name="normal_title" type="text" value="'. $r['title'] .'">';
            echo '<br><span><h6>Banner Label:</h6></span>';
            echo '<input id="page_header" class="form-control" name="normal_header" type="text" value="'. $r['header'] .'">';
            echo '<br><span><h6>Banner Image:</h6></span>';
            echo '<input id="page_image" class="form-control" name="normal_image" type="text" value="'. $r['banner_image'] .'">';
            echo '<br><span><h6>Page Content:</h6></span>';
            echo '<textarea id="page_body" class="form-control" name="normal_body" rows="10" cols="130">'. $r['body'] .'</textarea><br>';
            echo '<input type="submit" class="btn btn-info" value="Update Page">';
            echo '</form>';
        }

    }
    else
    {

    }
    ?>


</main>


<link rel="stylesheet" href="/css/dashboard-modify-page.css">

<?php include('../' . D_TEMPLATE . '/footer.php'); ?>


<script src="/node_modules/tinymce/tinymce.jquery.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#page_body',
        theme: 'modern',
        width: 1100,
        height: 900,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
        image_advtab: true,
        content_css: [
            '/node_modules/bootstrap/dist/css/bootstrap.min.css'
        ]
    });
</script>