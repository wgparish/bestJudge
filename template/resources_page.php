<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/8/2017
 * Time: 12:52 AM
 */

?>

<link href="/css/gallery.css" rel="stylesheet">

<div id="banner" class="baseHeader">
    <h1 class="page_title"><?php echo $page['header']; ?></h1>
    <img src="<?php echo $page['banner_image']; ?>" alt="">
</div>

<div class="container">

    <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Image Gallery</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div align="center justify-content-center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="ACM">ACM</button>
            <button class="btn btn-default filter-button" data-filter="ICPC">ICPC</button>
            <button class="btn btn-default filter-button" data-filter="KSU">KSU</button>
            <button class="btn btn-default filter-button" data-filter="CCSE">CCSE</button>
        </div>
        <br/>
    </div>

    <div class="row">
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ACM">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ICPC">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ACM">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter CCSE">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter KSU">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter CCSE">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter KSU">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter CCSE">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter CCSE">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ACM">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter KSU">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ICPC">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>
    </div>

    <?php echo $page['body']; ?>
</div>


<script type="text/javascript">

</script>