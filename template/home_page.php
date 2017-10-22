<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/29/2017
 * Time: 10:33 PM
 */


$json = json_decode($page['body']);



?>
<link href="../css/carousel.css" rel="stylesheet">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="first-slide img-fluid"
                 src="<?php echo $json->Jumbotron->item_1->image; ?>"
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption d-block text-left">
                    <h1><?php echo $json->Jumbotron->item_1->title; ?></h1>
                    <p><?php echo $json->Jumbotron->item_1->content; ?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $json->Jumbotron->item_1->link; ?>" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide img-fluid" src="<?php echo $json->Jumbotron->item_2->image; ?>"
                 alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-block">
                    <h1><?php echo $json->Jumbotron->item_2->title; ?></h1>
                    <p><?php echo $json->Jumbotron->item_2->content; ?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $json->Jumbotron->item_2->link; ?>" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide img-fluid" src="<?php echo $json->Jumbotron->item_3->image; ?>"
                 alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-block text-right">
                    <h1><?php echo $json->Jumbotron->item_3->title; ?></h1>
                    <p><?php echo $json->Jumbotron->item_3->content; ?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $json->Jumbotron->item_3->link; ?>" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo $json->bubble_items->item_1->image; ?>"
                 alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $json->bubble_items->item_1->title; ?></h2>
            <p><?php echo $json->bubble_items->item_1->content; ?></p>
            <p><a class="btn btn-secondary" href="<?php echo $json->bubble_items->item_1->link; ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo $json->bubble_items->item_2->image; ?>" alt="Generic placeholder image"
                 width="140" height="140">
            <h2><?php echo $json->bubble_items->item_2->title; ?></h2>
            <p><?php echo $json->bubble_items->item_2->content; ?></p>
            <p><a class="btn btn-secondary" href="<?php echo $json->bubble_items->item_2->link; ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo $json->bubble_items->item_3->image; ?>"
                 alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $json->bubble_items->item_3->title; ?></h2>
            <p><?php echo $json->bubble_items->item_3->content; ?></p>
            <p><a class="btn btn-secondary" href="<?php echo $json->bubble_items->item_3->link; ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $json->features->item_1->title; ?>, <span
                        class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead"><?php echo $json->features->item_1->content; ?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo $json->features->item_1->image; ?>"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            <h2 class="featurette-heading"><?php echo $json->features->item_2->title; ?>
            </h2>
            <p class="lead"><?php echo $json->features->item_2->content; ?></p>
        </div>
        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto"
                 src="<?php echo $json->features->item_2->image; ?>"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $json->features->item_3->title; ?>, <span class="text-muted">Checkmate.</span></h2>
            <p class="lead"><?php echo $json->features->item_3->content; ?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto"
                 src="<?php echo $json->features->item_3->image; ?>" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


</div><!-- /.container -->
