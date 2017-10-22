<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 8/6/17
 * Time: 7:50 PM
 */

?>

<div class="input-group-btn select" id="select1">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="selected"><?php if(isset($_POST['page_select'])){ echo $_POST['page_select'];} else { echo 'Select Page..';} ?></span><span class="caret pull-right"></span>
    </button>
    <ul class="dropdown-menu option" role="menu" id="page_select">
        <li id="1"><a class="dropdown-item" href="#">Home Page</a></li>
        <li id="2"><a class="dropdown-item" href="#">Events Page</a></li>
        <li id="3"><a class="dropdown-item" href="#">News Page</a></li>
        <li id="4"><a class="dropdown-item" href="#">ICPC Page</a></li>
        <li id="5"><a class="dropdown-item" href="#">Resources Page</a></li>
        <li id="6"><a class="dropdown-item" href="#">Forum Page</a></li>
        <li id="7"><a class="dropdown-item" href="#">About Page</a></li>
        <li id="8"><a class="dropdown-item" href="#">Join Us Page</a></li>
    </ul>
</div>


<link rel="stylesheet" href="/css/dashboard-modify-page.css">

<?php include(D_TEMPLATE . '/footer.php'); ?>
<script>
    $('body').on('click', '.option li', function () {
        var i = $(this).parents('.select').attr('id');
        var v = $(this).children().text();
        var o = $(this).attr('id');
        $('#' + i + ' .selected').attr('id', o);
        $('#' + i + ' .selected').text(v);
    });
</script>