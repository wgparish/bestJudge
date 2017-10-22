<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 4:55 PM
 */

require("libs/config.php");
$pageDetails = "JUDGE";

# Session Start
session_start();

# General Page setup
include('libs/setup.php');

# Add login function
include('libs/login.php');

include(D_TEMPLATE . '/header.php');
?>

<div id="banner" class="baseHeader">
    <h1 class="page_title"><?php echo $page['header']; ?></h1>
    <img src="/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg"
         alt="">
</div>

<?php
include(D_TEMPLATE . '/footer.php');
?>
