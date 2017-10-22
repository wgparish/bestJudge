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
global $DB;
$q = $DB->query('SELECT * FROM rubric_descriptor');
while($r = $q->fetch()){
    ?>
<section>
    <div class="container py-3">
        <div class="card">
            <div class="row ">
                <div class="col-md-8 px-3">
                    <div class="card-block px-3">
                        <h4 class="card-title"><?php echo $r['descriptor_title']; ?></h4>
                        <h6 class="card-title"><?php echo $r['static_point_value']; ?></h6>
                        <p class="card-text"><?php echo $r['descriptor']; ?></p>
                    </div>
                </div>
                <div class="col-md-4 px-3">
                    <br/>
                    <br/>
                    <form class="form-control" method="post" action="judge.php">
                        <input type="text" class="form-control" placeholder="insertOldValueHere">
                        <br/>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>


<?php
include(D_TEMPLATE . '/footer.php');
?>
