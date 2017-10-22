<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 4:53 PM
 */


$all_vars = get_defined_vars();

?>

<script src="/libs/js/debug.js"></script>

<div id="console-debug" class="console-debug" style="display: none">
    <h3>Page Variables</h3>
    <pre>
        <?php
        print_r($all_vars);
        ?>
    </pre>
</div>

