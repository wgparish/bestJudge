<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 8/31/17
 * Time: 5:34 PM
 */

if ($_POST)
{

    $email = $user['email'];
    $old_pass = $_POST['input_old_pass'];
    $new_pass_1 = $_POST['input_new_pass_1'];
    $new_pass_2 = $_POST['input_new_pass_2'];

    $q1 = "SELECT COUNT(*) FROM users WHERE email = '$email'";
    $r1 = $DB->query($q1);

    if ($r1->fetchColumn() > 0)
    {

        $q2 = "SELECT password FROM users WHERE email = '$email'";
        $r2 = $DB->query($q2);
        $old_hash = $r2->fetchColumn();

        if (password_verify($old_pass, $old_hash))
        {
            if($new_pass_1 == $new_pass_2)
            {
                $new_hash = strong_encrypt($new_pass_1);

                $stmt = $DB->prepare('UPDATE users SET password = :pass WHERE email = :email;');
                $stmt->bindParam(':pass',$new_hash,PDO::PARAM_STR);
                $stmt->bindParam(':email',$email, PDO::PARAM_STR);
                $stmt->execute();

                $_POST['Action_Response'] = 'Update Successful';
            }
            else{
                $_POST['Action_Response'] = 'Passwords do not match';
            }
        }
        else
        {
            $_POST['Action_Response'] = 'Password Incorrect';
        }
    }
    else
    {
        $_POST['Action_Response'] = 'This should not be possible, something went very wrong.';
    }
}
