<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/7/2017
 * Time: 9:28 PM
 */

?>

<link href="/css/bootstrap_cards.css" rel="stylesheet">


<div id="banner" class="baseHeader">
    <h1 class="page_title"><?php echo $page['header']; ?></h1>
    <img src="<?php echo $page['banner_image']; ?>" alt="">
</div>

<div class="container">


    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Free</h3>
            <div class="card card-01">
                <img class="card-img-top"
                     src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb"
                     alt="Card image cap">
                <div class="card-block">
                    <span class="badge-box"><i class="fa fa-check"></i></span>
                    <h4 class="card-title">Free Membership</h4>
                    <ul class="card-text fa-ul">
                        <li><i class="fa-li fa fa-check-square"></i>Email Subscription</li>
                        <li><i class="fa-li fa fa-check-square"></i>Professional Community</li>
                        <li><i class="fa-li fa fa-check-square"></i>Club Lounge Access</li>
                        <li><i class="fa-li fa fa-check-square"></i>Event Access</li>
                        <li><i class="fa-li fa fa-check-square"></i>Website Resource Access</li>
                    </ul>
                    <a href="https://owllife.kennesaw.edu/organization/ACM" class="btn btn-default card-btn text-uppercase">Join</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-center">Local</h3>
            <div class="card card-01">
                <img class="card-img-top"
                     src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb"
                     alt="Card image cap">
                <div class="card-block">
                    <span class="badge-box"><i class="fa fa-check"></i></span>
                    <h4 class="card-title">Local Membership</h4>
                    <ul class="card-text fa-ul">
                        <li><i class="fa-li fa fa-check-square"></i>All Free Tier</li>
                        <li><i class="fa-li fa fa-check-square"></i>Free Printing</li>
                        <li><i class="fa-li fa fa-check-square"></i>ACM T-Shirt</li>
                        <li><i class="fa-li fa fa-check-square"></i>Priority On Food</li>
                        <li><i class="fa-li fa fa-check-square"></i>ACM Equipment Access</li>
                    </ul>
                    <a href="https://owllife.kennesaw.edu/organization/ACM" class="btn btn-default card-btn text-uppercase">Join</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-center">National</h3>
            <div class="card card-01">
                <img class="card-img-top"
                     src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb"
                     alt="Card image cap">
                <div class="card-block">
                    <span class="badge-box"><i class="fa fa-check"></i></span>
                    <h4 class="card-title">National Membership</h4>
                    <ul class="card-text fa-ul">
                        <li><i class="fa-li fa fa-check-square"></i>All Free Tier</li>
                        <li><i class="fa-li fa fa-check-square"></i>All Local Tier</li>
                        <li><i class="fa-li fa fa-check-square"></i>Access to ACM News</li>
                        <li><i class="fa-li fa fa-check-square"></i>Digital Library</li>
                        <li><i class="fa-li fa fa-check-square"></i>Much More...</li>
                    </ul>
                    <a href="https://campus2.acm.org/public/qj/quickjoin/qj_control.cfm?promo=PWEBTOP&form_type=Student" class="btn btn-default card-btn text-uppercase">Join</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo $page['body']; ?>

</div>