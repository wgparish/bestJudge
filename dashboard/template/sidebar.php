<?php
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 7/14/2017
 * Time: 11:42 PM
 */
?>
<link href="/css/sidebar.css" rel="stylesheet">
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar" id="sidebar">
            <div class="list-group panel">
                <a href="/dashboard/index.php" class="list-group-item active"><i class="fa fa-dashboard"></i>&nbsp;Overview</a>
                <a href="#" class="list-group-item"><i class="fa fa-pie-chart"></i>&nbsp;Reports</a>
                <a href="#" class="list-group-item"><i class="fa fa-bar-chart-o"></i>&nbsp;Analytics</a>
                <a href="#" class="list-group-item"><i class="fa fa-envelope"></i>&nbsp;Export</a>
            </div>

            <div class="list-group panel">
                <a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-columns"></i><span
                            class="hidden-sm-down">&nbsp;Manage Pages</span> </a>
                <div class="collapse" id="menu1">
                    <a href="/dashboard/pages/manage_pages.php" class="list-group-item" data-parent="#menu1"><i
                                class="fa fa-window-maximize"></i>&nbsp;View Pages</a>
                    <a href="/dashboard/pages/modify_page.php" class="list-group-item" data-parent="#menu1"><i
                                class="fa fa-window-restore"></i>&nbsp;Modify
                        Page</a>
                    <a href="/dashboard/pages/add_page.php" class="list-group-item" data-parent="#menu1"><i
                                class="fa fa-plus"></i>&nbsp;Add
                        Page</a>
                    <a href="#" class="list-group-item" data-parent="#menu1"><i class="fa fa-window-close-o"></i>&nbsp;Delete
                        Page</a>
                </div>

                <a href="#menu2" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-users"></i> <span
                            class="hidden-sm-down">&nbsp;Manage Users</span> </a>
                <div class="collapse" id="menu2">
                    <a href="/dashboard/users/manage_users.php" class="list-group-item" data-parent="#menu2"><i
                                class="fa fa-users"></i>&nbsp;View Users</a>
                    <a href="#" class="list-group-item" data-parent="#menu2"><i class="fa fa-user-md"></i>&nbsp;Modify
                        User</a>
                    <a href="#" class="list-group-item" data-parent="#menu2"><i class="fa fa-user-plus"></i>&nbsp;Add
                        User</a>
                    <a href="#" class="list-group-item" data-parent="#menu2"><i class="fa fa-user-times"></i>&nbsp;Delete
                        User</a>
                </div>

                <a href="#menu3" class="list-group-item collapsed disabled" data-toggle="" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-calendar"></i> <span
                            class="hidden-sm-down">&nbsp;Manage Events</span> </a>
                <div class="collapse" id="menu3">
                    <a href="#" class="list-group-item" data-parent="#menu3"><i class="fa fa-calendar-o"></i>&nbsp;View
                        Events</a>
                    <a href="#" class="list-group-item" data-parent="#menu3"><i class="fa fa-calendar-check-o"></i>&nbsp;Modify
                        Event</a>
                    <a href="#" class="list-group-item" data-parent="#menu3"><i class="fa fa-calendar-plus-o"></i>&nbsp;Add
                        Event</a>
                    <a href="#" class="list-group-item" data-parent="#menu3"><i class="fa fa-calendar-times-o"></i>&nbsp;Delete
                        Event</a>
                </div>

                <a href="#menu4" class="list-group-item collapsed disabled" data-toggle="" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-newspaper-o"></i> <span class="hidden-sm-down">&nbsp;Manage News</span>
                </a>
                <div class="collapse" id="menu4">
                    <a href="#" class="list-group-item" data-parent="#menu4"><i class="fa fa-question"></i>&nbsp;Subitem</a>

                </div>

                <a href="#menu5" class="list-group-item collapsed disabled" data-toggle="" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-thumb-tack"></i> <span class="hidden-sm-down">&nbsp;Manage Activities</span>
                </a>
                <div class="collapse" id="menu5">
                    <a href="#" class="list-group-item" data-parent="#menu5"><i class="fa fa-question"></i>&nbsp;Subitem</a>

                </div>

                <a href="#menu6" class="list-group-item collapsed " data-toggle="collapse" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-th"></i> <span
                            class="hidden-sm-down">&nbsp;Manage Resources</span> </a>
                <div class="collapse" id="menu6">
                    <a href="/dashboard/resources/manage_images.php" class="list-group-item" data-parent="#menu6"><i
                                class="fa fa-picture-o"></i>&nbsp;Images</a>
                    <a href="#" class="list-group-item" data-parent="#menu6"><i class="fa fa-film"></i>&nbsp;Videos</a>
                    <a href="#" class="list-group-item" data-parent="#menu6"><i
                                class="fa fa-question"></i>&nbsp;Other</a>
                </div>

                <a href="#menu7" class="list-group-item collapsed disabled" data-toggle="" data-parent="#sidebar"
                   aria-expanded="false"><i class="fa fa-comments"></i> <span
                            class="hidden-sm-down">&nbsp;Manage Forum</span> </a>
                <div class="collapse" id="menu7">
                    <a href="#" class="list-group-item" data-parent="#menu7"><i class="fa fa-question"></i>&nbsp;Subitem</a>

                </div>
            </div>

            <div class="list-group panel">
                <a href="#" class="list-group-item"><i class="fa fa-gear"></i>&nbsp;Site Settings</a>
                <a href="#" class="list-group-item"><i class="fa fa-database"></i>&nbsp;Backup</a>
                <a href="#" class="list-group-item"><i class="fa fa-desktop"></i>&nbsp;View Site</a>
            </div>
        </div>
