<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 8/16/17
 * Time: 2:30 PM
 */

header('HTTP/1.1 503 Service Unavailable');
//echo 'Server is down for maintenance. Please come back later.';

?>


<!doctype html>
<title>Site Maintenance</title>
<style>
    body { text-align: center; padding: 150px; }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; background-color: azure;  }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }

</style>

<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:acm@kennesaw.edu">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; The ACM Team</p>
    </div>

    <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
</article>
