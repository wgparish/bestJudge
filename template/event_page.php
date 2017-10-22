<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/7/2017
 * Time: 9:04 PM
 */

?>

<link rel='stylesheet' href='/node_modules/fullcalendar/dist/fullcalendar.css'/>
<link rel='stylesheet' href='/css/calendar.css'/>
<script src='/node_modules/jquery/dist/jquery.min.js'></script>
<script src='/node_modules/moment/moment.js'></script>

<script type="text/javascript">
    $(document).ready(function () {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            // put your options and callbacks here
        })

    });
</script>
<style>
    #calendar {
        /* 		float: right; */
        margin: 0 auto;
        width: 900px;
        background-color: #FFFFFF;
        border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
        -webkit-box-shadow: 0px 0px 21px 2px rgba(0, 0, 0, 0.18);
        -moz-box-shadow: 0px 0px 21px 2px rgba(0, 0, 0, 0.18);
        box-shadow: 0px 0px 21px 2px rgba(0, 0, 0, 0.18);
    }
</style>


<div id="banner" class="baseHeader">
    <h1 class="page_title"><?php echo $page['header']; ?></h1>
    <img src="<?php echo $page['banner_image']; ?>" alt="">
</div>

<div class="container">

    <div class="calendar-container">
        <div id='calendar' class="calendar"></div>
    </div>



    <?php echo $page['body']; ?>

</div>
