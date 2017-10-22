<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 10:23 PM
 */

if ($_POST) {
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];

    $q1 = "SELECT COUNT(*) FROM users WHERE email = '$email'";
    $r1 = $DB->query($q1);

    if ($r1->fetchColumn() > 0) {
        $q2 = "SELECT password FROM users WHERE email = '$email'";
        $r2 = $DB->query($q2);
        $hash = $r2->fetchColumn();

        if (password_verify($pass, $hash)) {
            $q3 = "SELECT * FROM users WHERE email = '$email'";
            $r3 = $DB->query($q3);
            $user = $r3->fetch();

            // Start Session
            $_SESSION['email'] = $_POST['inputEmail'];
            header('Location: index.php');
        }
    }
}

?>