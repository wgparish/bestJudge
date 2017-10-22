<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 8/6/17
 * Time: 10:52 PM
 */


if($_POST)
{
    if(isset($_POST['homepage_bubble_item1_title']))
    {
        // Get the JSON from database
        global $DB;
        $q = $DB->query("SELECT * FROM pages WHERE title='Home'");
        $r = $q->fetch();
        $decoded_json = json_decode($r['body']);

        // Update the JSON object
        $decoded_json->Jumbotron->item_1->image = $_POST['homepage_jumbo_item1_image'];
        $decoded_json->Jumbotron->item_1->title = $_POST['homepage_jumbo_item1_title'];
        $decoded_json->Jumbotron->item_1->content = $_POST['homepage_jumbo_item1_content'];
        $decoded_json->Jumbotron->item_1->link = $_POST['homepage_jumbo_item1_link'];

        $decoded_json->Jumbotron->item_2->image = $_POST['homepage_jumbo_item2_image'];
        $decoded_json->Jumbotron->item_2->title = $_POST['homepage_jumbo_item2_title'];
        $decoded_json->Jumbotron->item_2->content = $_POST['homepage_jumbo_item2_content'];
        $decoded_json->Jumbotron->item_2->link = $_POST['homepage_jumbo_item2_link'];

        $decoded_json->Jumbotron->item_3->image = $_POST['homepage_jumbo_item3_image'];
        $decoded_json->Jumbotron->item_3->title = $_POST['homepage_jumbo_item3_title'];
        $decoded_json->Jumbotron->item_3->content = $_POST['homepage_jumbo_item3_content'];
        $decoded_json->Jumbotron->item_3->link = $_POST['homepage_jumbo_item3_link'];



        $decoded_json->bubble_items->item_1->image = $_POST['homepage_bubble_item1_image'];
        $decoded_json->bubble_items->item_1->title = $_POST['homepage_bubble_item1_title'];
        $decoded_json->bubble_items->item_1->content = $_POST['homepage_bubble_item1_content'];
        $decoded_json->bubble_items->item_1->link = $_POST['homepage_bubble_item1_link'];

        $decoded_json->bubble_items->item_2->image = $_POST['homepage_bubble_item2_image'];
        $decoded_json->bubble_items->item_2->title = $_POST['homepage_bubble_item2_title'];
        $decoded_json->bubble_items->item_2->content = $_POST['homepage_bubble_item2_content'];
        $decoded_json->bubble_items->item_2->link = $_POST['homepage_bubble_item2_link'];

        $decoded_json->bubble_items->item_3->image = $_POST['homepage_bubble_item3_image'];
        $decoded_json->bubble_items->item_3->title = $_POST['homepage_bubble_item3_title'];
        $decoded_json->bubble_items->item_3->content = $_POST['homepage_bubble_item3_content'];
        $decoded_json->bubble_items->item_3->link = $_POST['homepage_bubble_item3_link'];



        $decoded_json->features->item_1->image = $_POST['homepage_features_item1_image'];
        $decoded_json->features->item_1->title = $_POST['homepage_features_item1_title'];
        $decoded_json->features->item_1->content = $_POST['homepage_features_item1_content'];

        $decoded_json->features->item_2->image = $_POST['homepage_features_item2_image'];
        $decoded_json->features->item_2->title = $_POST['homepage_features_item2_title'];
        $decoded_json->features->item_2->content = $_POST['homepage_features_item2_content'];

        $decoded_json->features->item_3->image = $_POST['homepage_features_item3_image'];
        $decoded_json->features->item_3->title = $_POST['homepage_features_item3_title'];
        $decoded_json->features->item_3->content = $_POST['homepage_features_item3_content'];

        // Push new JSON to server
        $new_json = json_encode($decoded_json);
        $stmt = $DB->prepare("UPDATE pages SET body='$new_json' WHERE id=1;");
        $stmt->execute();

        //header("Location: index.php");
    }

    if(isset($_POST['normal_id']))
    {
        global $DB;
        $pageID = $_POST['normal_id'];

        $pageParent = $_POST['normal_parent'];
        $pageTitle = $_POST['normal_title'];
        $pageHeader = $_POST['normal_header'];
        $pageImage = $_POST['normal_image'];
        $pageBody = $_POST['normal_body'];

        $stmt = $DB->prepare('UPDATE pages SET parent = :pageParent, title = :pageTitle, 
                              header = :pageHeader, banner_image = :pageImage, body = :pageBody 
                              WHERE id = :pageID;');
        $stmt->bindValue(':pageParent', $pageParent, PDO::PARAM_INT);
        $stmt->bindValue(':pageTitle', $pageTitle, PDO::PARAM_STR);
        $stmt->bindValue(':pageHeader', $pageHeader, PDO::PARAM_STR);
        $stmt->bindValue(':pageImage', $pageImage, PDO::PARAM_STR);
        $stmt->bindValue(':pageBody', $pageBody, PDO::PARAM_STR);
        $stmt->bindValue(':pageID', $pageID, PDO::PARAM_INT);
        $stmt->execute();
    }
}
