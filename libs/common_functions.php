<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 6:02 PM
 */

function debugResults($var, $strict = false)
{
    if ($var != NULL) {
        if ($strict == false) {

            if (is_array($var) || is_object($var)) {
                echo "<pre>";
                print_r($var);
                echo "</pre>";
            } else {
                echo $var;
            }
        } else {

            if (is_array($var) || is_object($var)) {
                echo "<pre>";
                var_dump($var);
                echo "</pre>";
            } else {
                var_dump($var);
            }
        }
    } else {
        var_dump($var);
    }
}

function errorMessage($str)
{
    return '<div style="width:50%; margin:0 auto; border:2px solid #F00;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
}

function successMessage($str)
{
    return '<div style="width:50%; margin:0 auto; border:2px solid #06C;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
}

function simple_redirect($url)
{

    echo "<script language=\"JavaScript\">\n";
    echo "<!-- hide from old browser\n\n";

    echo "window.location = \"" . $url . "\";\n";

    echo "-->\n";
    echo "</script>\n";

    return true;
}

function getHomeURL()
{
    return HTTP_SERVER . SITE_DIR;
}

// Return a random value
function db_prepare_input($string)
{
    return trim(addslashes($string));
}

//Encryption function
function easy_crypt($string)
{
    return base64_encode($string . "_@#!@");
}

//Decodes encryption
function easy_decrypt($str)
{
    $str = base64_decode($str);
    return str_replace("_@#!@", "", $str);
}


/**
 * Strong Encryption
 */
function strong_encrypt($str)
{
    $hash = password_hash($str, PASSWORD_BCRYPT, ['cost' => 12]);
    return $hash;
}


function page_data($page_id)
{
    global $DB;
    $stmt = $DB->query('SELECT * FROM pages WHERE id = ' . $page_id);
    $data = $stmt->fetch();

    $data['body_nohtml'] = strip_tags($data['body']);

    if ($data['body'] == $data['body_nohtml']) {
        $data['body_formatted'] = '<p>' . $data['body'] . '</p>';
    } else {
        $data['body_formatted'] = $data['body'];
    }

    return $data;
}

function getOptimalBcryptCostParameter($min_ms = 250)
{
    for ($i = 4; $i < 31; $i++) {
        $options = ['cost' => $i, 'salt' => 'usesomesillystringforsalt'];
        $time_start = microtime(true);
        password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $time_end = microtime(true);
        if (($time_end - $time_start) * 1000 > $min_ms) {
            return $i;
        }
    }
}

function redirectIfNotLoggedIn()
{
    if (!isset($_SESSION['email'])) {
        header('Location: ../login.php');
    }
}

function isLoggedIn()
{
    return isset($_SESSION['email']);
}

function data_user()
{
    global $DB;
    $q3 = "SELECT * FROM users WHERE email = '$_SESSION[email]'";
    $r3 = $DB->query($q3);
    $data = $r3->fetch();

    $data['fullname'] = $data['first_name'] . $data['last_name'];
    $data['fullname_reverse'] = $data['last_name'] . ', ' . $data['first_name'];

    return $data;
}

function data_setting_value($id)
{
    global $DB;
    $q = $DB->query("SELECT * FROM settings WHERE id = '$id'");
    $r = $q->fetch();

    return $r['value'];
}

function getNumberOfPages()
{
    global $DB;
    $q = $DB->prepare("SELECT id FROM pages;");
    $q->execute();

    return $q->rowCount();
}

function httpsRedirect()
{
    if ($_SERVER["HTTPS"] != "on") {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }
}