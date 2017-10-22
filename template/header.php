<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:30 PM
 */
?>

<!DOCTYPE HTML>
<HTML>
<head>
    <title><?php echo($page['title']); ?> - ACM</title>
    <link rel="icon" href="http://artoo.kennesaw.edu/_resources/images/favicon.ico" type="text/png"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="../css/default.css" rel="stylesheet">
</head>
<body>
<!-- Add Code below here -->


<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" role="navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">Kennesaw ACM</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav mr-auto">
            <?php
            global $DB;
            $q = $DB->query('SELECT * FROM pages');
            while ($r = $q->fetch()) { ?>
                <li class="nav-item <?php if ($page['id'] == $r['id']) {
                    echo 'active';
                } ?>"><a class="nav-link" href="/?page=<?php echo $r['id']; ?>"><?php echo $r['title']; ?></a></li>
            <?php } ?>
        </ul>

        <ul class="nav navbar-nav">
            <?php
            if (isLoggedIn()) {

                if ($debug == 1) {
                    echo '<li class="nav-item">';
                    echo '<buton id="btn-debug" class="btn btn-default nav-link"><i class="fa fa-bug"></i></buton>';
                    echo '</li>';
                }

                echo '<li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" id="dropdown01"
                               aria-haspopup="true" aria-expanded="false">' . $user['fullname_reverse'] . '</a>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdown01">';

                echo '<a class="dropdown-item" href="/profile.php">Profile</a>';
                echo '<a class="dropdown-item" href="#">Messages</a>';
                echo '<a class="dropdown-item" href="/login.php">Login (Test)</a>';
                echo '<a class="dropdown-item" href="/dashboard/index.php">Admin Dashboard</a>';
                echo '<a class="dropdown-item" href="/account.php">Account Settings</a>';
                echo '<a class="dropdown-item" href="/logout.php">Logout</a>';
                echo '</div>';
                echo '</li>';
            } else {
                echo '<li class="nav-item pull-right"><a class="nav-link" href="../login.php">Login</a></li>';
            }
            ?>
        </ul>


        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
