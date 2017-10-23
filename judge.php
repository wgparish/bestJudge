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

//$score_sheet_type = $_GET['type'];
//$team_num = $_GET['num'];
$score_sheet_type = $_POST['Score_Sheet'];
$team_num = $_POST['Team_number'];
?>

<div id="banner" class="baseHeader">
    <h1 class="page_title">Judging</h1>
    <img src="/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg"
         alt="">
</div>

<div id="score_sheet_select" class="dropdown-header">
    <form class="form-control" method="post" action="judge.php?type=Notebook">
        <select name="Score_Sheet" value="Select" size="1">
            <option>Null</option>
            <option value="Notebook">Notebook</option>
            <option value="Marketing">Marketing</option>
        </select>
        <select name="Team_number" value="Select" size="1">
            <option>Null</option>
            <option value="118">118</option>
            <option value="119">119</option>
        </select>
        <input type="submit">
    </form>
    <div class="container py-2">
        <h1>You are judging  <?php echo $score_sheet_type; ?> for Team <?php echo $team_num; ?></h1>
    </div>
</div>

<?php
global $DB;
$sub_section = '';
$type_variable = "Notebook";
$query = "SELECT * FROM rubric_descriptor WHERE score_sheet = " . '"' . $score_sheet_type . '" ORDER BY sub_section_Type';
$q = $DB->query($query);
while($r = $q->fetch()){
    ?>
<section>
    <div class="container py-3">
        <div class="card">
            <?php
                if($sub_section != $r['sub_section_type']){
                    ?>
                        <div class="row">
                            <div class="col-md-8 px-3">
                                <div class="card-block px-3">
                                    <h1 class="card-title"><?php echo $r['sub_section_type']; ?></h1>
                                </div>
                            </div>
                        </div>
                    <?php
                    $sub_section = $r['sub_section_type'];
                }
            ?>
            <div class="row">
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
