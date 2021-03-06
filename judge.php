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

$score_sheet_type = $_GET['type'];
$team_num = $_GET['teamNum'];
//$score_sheet_type = $_POST['Score_Sheet'];
//$team_num = $_POST['Team_number'];
?>

<div id="banner" class="baseHeader">
    <h1 class="page_title">Judging</h1>
    <img src="/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg"
         alt="">
</div>

<div id="score_sheet_select" class="dropdown-header">
    <script type="text/javascript">
        function changeURL(){
            var type = document.getElementById('type').value;
            var teamNum = document.getElementById('teamNum').value;

           document.getElementById('typeAndTeamNumForm').action = "judge.php?type=" + type + "&teamNum=" + teamNum;
        }
    </script>
    <form class="form-control" method="post" action="judge.php" id="typeAndTeamNumForm">
        <select name="Score_Sheet" size="1" id="type">
            <option>Null</option>
            <?php
            global $DB;
            $query = "SELECT DISTINCT score_sheet From rubric_descriptor";
            $q = $DB->query($query);
            while($r = $q->fetch()){
                ?>
                <option value="<?php echo $r['score_sheet']; ?>"><?php echo $r['score_sheet']; ?></option>
            <?php
            }
            ?>
        </select>
        <select name="Team_number" size="1" id="teamNum">
            <option>Null</option>
            <?php
            global $DB;
            $query = "SELECT DISTINCT team_number From team ORDER BY team_number DESC";
            $q = $DB->query($query);
            while($r = $q->fetch()){
                ?>
                <option value="<?php echo $r['team_number']; ?>"><?php echo $r['team_number']; ?></option>
                <?php
            }
            ?>
        </select>
        <button type="submit" onclick="changeURL()" class="btn btn-success">submit</button>
    </form>
    <div class="container py-2">
        <h1>You are judging  <?php echo $score_sheet_type; ?> for Team <?php echo $team_num; ?></h1>
    </div>
</div>

<?php
global $DB;
$sub_section = '';
$query = "SELECT * FROM rubric_descriptor WHERE score_sheet = " . '"' . $score_sheet_type . '" ORDER BY sub_section_Type';
$q = $DB->query($query);
while($r = $q->fetch()){
    ?>
<section>
    <div class="container py-3">
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
                    <div id="form-messages">hello
                    </div>
                        <form class="form-control" id="point_submit_form" method="post" action="judgePost.php">
                            <?php
                            $judgeNum = $_SESSION['judge_number'];
                            $query2 = $DB->prepare("SELECT point_value FROM score_sheet WHERE judge_number = :judgeNum AND score_sheet = :scoreSheetType AND sub_section_type = :subSectionType AND team_number = :teamNum");
                            $query2->bindParam(':judgeNum', $judgeNum, PDO::PARAM_INT);
                            $query2->bindParam(':scoreSheetType', $score_sheet_type, PDO::PARAM_STR);
                            $query2->bindParam(':subSectionType', $sub_section, PDO::PARAM_STR);
                            $query2->bindParam(':teamNum', $team_num, PDO::PARAM_INT);

                            $query2->execute();
                            if($r2 = $query2->fetch()) {
                                ?>
                                <input type="text" id="point_value" name="point_value" class="form-control" placeholder="<?php $r2['point_value']; ?>" required>
                                <?php
                            }else{
                                ?>
                                <input type="text" id="point_value" name="point_value" class="form-control" placeholder="Input initial score" required>
                                <?php
                            }
                            ?>
                            <input type="submit" id="submitButton" name="submitButton" value="Submit">
                        </form>
                </div>
            </div>
        </div>
</section>
<?php
}
?>

<script type="text/javascript">
    $("#point_submit_form").submit(function(event) {

        /* stop form from submitting normally */
        event.preventDefault();

        /* get the action attribute from the <form action=""> element */
        var $form = $( this ),
            url = $form.attr( 'action' );

        /* Send the data using post with element id name and name2*/
        var posting = $.post( url, { pointVal: $('#point_value').val() } );

        /* Alerts the results */
        posting.done(function( data ) {
            alert('success');
        });
    });
</script>

<?php
include(D_TEMPLATE . '/footer.php');
?>
