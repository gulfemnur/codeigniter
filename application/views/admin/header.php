<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title> TAKILAR </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/css/main.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/css/theme.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?=base_url() ?>assets/admin/css/layout2.css" rel="stylesheet" />
       <link href="<?=base_url() ?>assets/admin/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="<?=base_url() ?>assets/admin/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="<?=base_url() ?>assets/admin/img/takilogo.jpg" height="50" width="50" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> Kullan??c?? Profili </a>
                            </li>
                            <li><a href="<?=base_url()?>admin/ayarlar"><i class="icon-gear"></i> Ayarlar </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?=base_url() ?>admin/login"><i class="icon-signout"></i> ????k???? Yap </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->