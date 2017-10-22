<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 8/31/17
 * Time: 6:59 PM
 */

?>


    <div class="change-pass">
        <form class="form-control" action="<?php echo $pageDetails; ?>.php" method="post" role="form">
            <h4>Change Password</h4>
            <label for="input_old_pass">Old Password</label>
            <input class="form-control" id="input_old_pass" name="input_old_pass" type="password" required><br>

            <label for="input_new_pass_1">New Password</label>
            <input class="form-control" id="input_new_pass_1" name="input_new_pass_1" type="password" required><br>

            <label for="input_new_pass_2">New Password Again</label>
            <input class="form-control" id="input_new_pass_2" name="input_new_pass_2" type="password" required><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Action_Response']))
    {
        echo '<br/>';
        if($_POST['Action_Response'] == 'Update Successful')
        {
            echo '<div class="alert alert-success">';
            echo '<strong>Success!</strong> Your password has been changed.';
            echo '</div>';
        }
        elseif($_POST['Action_Response'] == 'Passwords do not match')
        {
            echo '<div class="alert alert-warning">';
            echo '<strong>Error!</strong> Your passwords do not match.';
            echo '</div>';
        }
        elseif($_POST['Action_Response'] == 'Password Incorrect')
        {
            echo '<div class="alert alert-warning">';
            echo '<strong>Error!</strong> The password entered is incorrect.';
            echo '</div>';
        }
        elseif($_POST['Action_Response'] == 'This should not be possible, something went very wrong.')
        {
            echo '<div class="alert alert-danger">';
            echo '<strong>Oh snap!</strong> This should not be possible, something went very wrong.';
            echo '</div>';
        }
    }
    ?>
