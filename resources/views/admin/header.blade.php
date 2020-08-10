<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="adminStyle/plugins/images/favicon.png">
    <title>SinhasJobConsultancy</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('adminStyle/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('adminStyle/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('adminStyle/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('adminStyle/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('adminStyle/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('adminStyle/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('adminStyle/css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> 
                <ul class="nav navbar-top-links navbar-left m-l-20 m-t-10 hidden-xs">
                <span style="font-size:30px;color:white">Sinha's JobConsultancy</span>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="adminStyle/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav nav-style" >
                    <li style="padding: 10px 0 0;">
                        <a href="\dashboard" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true">
                        </i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="\profile" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">Profile</span></a>
                    </li>
                    <li>
                        <a href="\appliedJobs" class="waves-effect"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">Applied jobs</span></a>
                    </li>
                    <li>
                        <a href="\jobseeker-section" class="waves-effect"><i class="fa fa-group fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">Jobseeker</span></a>
                    </li>
                    <li>
                        <a href="\employer-section" class="waves-effect"><i class="fa fa-handshake-o fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">Employer</span></a>
                    </li>
                    <li>
                    <a href="\jobs-section" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu" >Jobs</span></a>
                    </li>
                    <li>
                        <a href="\contact-section" class="waves-effect"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">Messages</span></a>
                    </li>
                    
                </ul>

            </div>
        </div>
        <style>
          
          .waves-effect{
            color:black;
            margin:12px;
          }
          </style>
         <!-- Left navbar-header end -->