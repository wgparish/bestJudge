<?php require '../../libs/functions.php';
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 4/29/2017
 * Time: 11:51 PM
 */

require("../../libs/config.php");
$pageDetails = "manage_pages";

include('../../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('../template/header.php');
include('../template/sidebar.php');
?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1 class="page-header">Current Pages</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Created By</th>
                    <th>Parent Page</th>
                    <th>Title</th>
                    <th>Header</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody>
                <?php
                global $DB;
                $q = $DB->query('SELECT * FROM pages');
                while ($r = $q->fetch()) {
                    $userID = $r['user'];
                    $q2 = $DB->prepare('SELECT * FROM users WHERE id=:userID');
                    $q2->bindParam(':userID', $userID, PDO::PARAM_INT);
                    $q2->execute();
                    $r2 = $q2->fetch();
                    echo "<tr>";
                    echo "<td>";
                    echo $r['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $r2['first_name'] . " " . $r2['last_name'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['parent'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['title'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['header'];
                    echo "</td>";
                    echo "<td>";
                    echo $r[''];
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>


<?php include('../' . D_TEMPLATE . '/footer.php'); ?>