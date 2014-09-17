<?php //echo "<pre>";print_r($mail);echo "</pre>";exit; ?>
<?php 
//echo "<pre>";print_r($this->session->all_userdata());echo "</pre>"; echo $this->session->userdata('login_info');exit; 
$fname = $this->session->userdata('fname');
$names = $this->session->userdata('fname').' '.$this->session->userdata('lname');
$email = $this->session->userdata('email');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Instructors</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url().'assets/css/fonts/fontawesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url().'assets/css/ionicons/css/ionicons.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url().'assets/css/asap/asap.css'?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url().'assets/css/jvectormap/jquery-jvectormap-1.2.2.css'?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url().'assets/css/datepicker/datepicker3.css'?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url().'assets/css/daterangepicker/daterangepicker-bs3.css'?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url().'assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href = "<?php echo base_url().'assets/css/admin.css'?>" rel = "stylesheet" type = "text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin Dashboard
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url().'assets/images/img/avatar3.png'?>" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url().'assets/images/img/avatar2.png'?>" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-warning-sign"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                 <span><?php echo $names; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url().'assets/images/img/avatar3.png'?>" class="img-circle" alt="User Image" />
                                    <p>
                                       <?php echo $names;  ?> - Site Administrator
                                        <small>Email: <?php echo $email ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url().'assets/images/img/avatar3.png'?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $fname; ?></p>

                            <a href="#"><i class="glyphicon glyphicon-ok-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="<?php echo base_url(). 'admin'?>">
                                <i class="fa fa-tachometer"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/Instructors'?>">
                                <i class="fa fa-mortar-board"></i> <span>Instructors</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/members'?>">
                                <i class="fa fa-users"></i><span>Members</span>   
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url(). 'admin/users'?>">
                                <i class="fa fa-user"></i> <span>Users</span>
                               
                            </a>
                            
                        </li>
                        
                        <li class="active">
                            <a href="<?php echo base_url().'admin/mail_box' ?>">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/logout') ?>">
                                <i class="fa fa-lock"></i> <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Mail Box
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Mails</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- MAILBOX BEGIN -->
                    <div class="mailbox row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <!-- BOXES are complex enough to move the .box-header around.
                                                 This is an example of having the box header within the box body -->
                                            <div class="box-header">
                                                <i class="fa fa-inbox"></i>
                                                <h3 class="box-title">INBOX</h3>
                                            </div>
                                            <!-- compose message btn -->
                                            <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> Compose Message</a>
                                            <!-- Navigation - folders-->
                                            <div style="margin-top: 15px;">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="header">Folders</li>
                                                    <li class="active"><a href="" onclick="toggle_div('errorsDiv');"><i class="fa fa-inbox"></i> Inbox (14)</a></li>
                                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                                                    <li><a href="" onclick="toggle_div('sentDiv');"><i class="fa fa-mail-forward"></i> Sent</a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
                                                    <li><a href="#"><i class="fa fa-folder"></i> Junk</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col (LEFT) -->
                                        <div class="col-md-9 col-sm-8" id="errorsDiv" style="display: block;">
                                            <div class="row pad">
                                                <div class="col-sm-6">
                                                    <label style="margin-right: 10px;">
                                                        <input type="checkbox" id="check-all"/>
                                                    </label>
                                                    <!-- Action button -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Mark as read</a></li>
                                                            <li><a href="#">Mark as unread</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Move to junk</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Delete</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6 search-form">
                                                    <form action="#" class="text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                                            <div class="input-group-btn">
                                                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.row -->

                                            <div class="table-responsive">
                                                <!-- THE MESSAGES -->
                                                <?php
                                                    //print_r($inbox); die();

                                                ?>
                                                <table class="table table-mailbox">
                                                <?php
                                                    foreach ($inbox as $value) {
                                                        
                                                        if ($value['looked_at'] == 0) {
                                                            $class = "unread";
                                                        } else if ($value['looked_at'] == 1) {
                                                            $class = "";
                                                        }
                                                ?>
                                                        <tr class="<?php echo $class; ?>">
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star"></i></td>
                                                        <td class="name"><a href="#"><?php echo $value['user_name']; ?></a></td>
                                                        <td class="subject"><a href="#"><?php echo $value['subject'] ?></a></td>
                                                        <td class="time"><?php echo $value['date']; ?></td>
                                                    </tr>
                                                <?php   
                                                    
                                                    }
                                                ?>
                                                    
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.col (RIGHT) -->

                                        <div class="col-md-9 col-sm-8" id="sentDiv" style="display: none;">
                                            <div class="row pad">
                                                <div class="col-sm-6">
                                                    <label style="margin-right: 10px;">
                                                        <input type="checkbox" id="check-all"/>
                                                    </label>
                                                    <!-- Action button -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Mark as read</a></li>
                                                            <li><a href="#">Mark as unread</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Move to junk</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Delete</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6 search-form">
                                                    <form action="#" class="text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                                            <div class="input-group-btn">
                                                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.row -->

                                            <div class="table-responsive">
                                                <!-- THE EMAILS -->
                                                <?php
                                                    //print_r($inbox); die();

                                                ?>
                                                <table class="table table-mailbox">
                                                <?php
                                                    foreach ($mails as $value) {
                                                       
                                                        
                                                ?>
                                                        <tr class="<?php echo $class; ?>">
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star"></i></td>
                                                        <td class="name"><a href="#"><?php echo $value['recipients']; ?></a></td>
                                                        <td class="subject"><a href="#"><?php echo $value['subject'] ?></a></td>
                                                        <td class="time"><?php echo $value['date']; ?></td>
                                                    </tr>
                                                <?php   
                                                    
                                                    }
                                                ?>
                                                  
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <div class="pull-right">
                                        <small>Showing 1-12/1,240</small>
                                        <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                                        <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                                    </div>
                                </div><!-- box-footer -->
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
                    <!-- MAILBOX END -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

    <div class="modal fade" id="compose-modal">
	    <div class="modal-dialog" style="width:60%;margin-bottom:2px;">
	        <div class="modal-content" >
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                
	            </div>
	            <div class="modal-body" style="padding-bottom:0px;">    
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>
                            <h3 class="box-title">Send Email</h3>
                             <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                        </div>
                        <form action="<?php echo base_url(). 'admin/email_details'?>" method="post">
                            <div class="box-body">
                                        
                                <div class="form-group">
                                    <input type="email" class="form-control" name="recipient" placeholder="Email to:"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                </div>
                                <div>
                                    <textarea class="textarea" name = "message" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="box-footer clearfix">
                                <button class="pull-right btn btn-default" id="sendEmail" type = "submit">Send <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
                    </div>
	                <div class="modal-footer" style="height:11px;padding-top:11px;">
	                    <?php echo $this->config->item("copyrights");?>
	                </div> 
	            </div>
	        </div>
	    </div>
	</div>





        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url().'assets/js/plugins/morris/morris.min.js'?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url().'assets/js/plugins/sparkline/jquery.sparkline.min.js'?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url().'assets/js/plugins/jqueryKnob/jquery.knob.js'?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url().'assets/js/plugins/daterangepicker/daterangepicker.js'?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url().'assets/js/plugins/datepicker/bootstrap-datepicker.js'?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url().'assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url().'assets/js/plugins/iCheck/icheck.min.js'?>" type="text/javascript"></script>

        <!-- Admin App -->
        <script src="<?php echo base_url().'assets/js/admin/app.js'?>" type="text/javascript"></script>

        <!-- Admin dashboard demo (This is only for demo purposes)  -->
        <script src="<?php echo base_url().'assets/js/admin/dashboard.js'?>" type="text/javascript"></script>

        <!-- Admin for demo purposes -->
        <script src="<?php echo base_url().'assets/js/admin/demo.js'?>" type="text/javascript"></script>
    
    </body>
</html>