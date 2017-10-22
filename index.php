<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:59 PM
 */

require("libs/config.php");
$pageDetails = "INDEX-TEMP";

include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

<?php

if ($page['title'] == 'Home') {

    include(D_TEMPLATE . '/home_page.php');

} elseif ($page['title'] == 'Events') {
    include(D_TEMPLATE . '/event_page.php');
} elseif ($page['title'] == 'Join') {
    include(D_TEMPLATE . '/join_page.php');
} elseif ($page['title'] == 'Resources') {
    include(D_TEMPLATE . '/resources_page.php');
} elseif ($page['title'] == 'About') {
    include(D_TEMPLATE . '/about_page.php');
} else { ?>
    <div id="banner" class="baseHeader">
        <h1 class="page_title"><?php echo $page['header']; ?></h1>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>

    <div class="container">
        <?php echo $page['body']; ?>
    </div>
<?php }
?>

<?php
include(D_TEMPLATE . '/footer.php');
?>

<?php

if ($page['title'] == 'Events') {
    include('widgets/calendar.php');
}
if ($page['title'] == 'Resources') {
    echo '<script src="libs/js/gallery.js"></script>';
}
if($user['permissions'] == 'admin'||'web admin')
{
    if($debug == 1)
    {
        include('widgets/debug.php');
    }
}
?>