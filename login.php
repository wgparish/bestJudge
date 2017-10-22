<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 4:55 PM
 */

require("libs/config.php");
$pageDetails = "INDEX-TEMP";

# Session Start
session_start();

# General Page setup
include('libs/setup.php');

# Add login function
include('libs/login.php');

include(D_TEMPLATE . '/header.php');
?>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <div id="banner" class="baseHeader">
        <h1 class="page_title"><?php echo $page['header']; ?></h1>
        <img src="/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg"
             alt="">
    </div>

    <div class="container">

        <form class="form-signin" action="login.php" method="post" role="form">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="inputEmail"
                   placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="inputPassword"
                   placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <div class="g-recaptcha" data-sitekey="6Ledxy4UAAAAAPUHbLherIinxEjLAe5_WLbQ1cTd"></div>

            <br/>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div>

<?php
include(D_TEMPLATE . '/footer.php');
?>