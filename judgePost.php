<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 10/26/2017
 * Time: 6:40 PM
 */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pointValue = strip_tags(trim($_POST["point_value"]));
        $pointValue = str_replace(array("\r","\n"),array(" "," "),$pointValue);

        // Check that data was sent to the mailer.
        if ( empty($pointValue) ) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again. 400";
            exit;
        }

        http_response_code(200);
        echo "It worked";
    }else{
        http_response_code(403);
        echo "There was a problem with your submission, please try again. 403";
    }
?>