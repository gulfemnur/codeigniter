<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?=base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/css/login.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/admin/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="<?=base_url() ?>assets/img/takilogo.jpg" height="200" width="200" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <?= $this->session->flashdata("mesaj") ?>
            <form action="<?=base_url() ?>admin/login/login_ol" class="form-signin" method="post">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Kullanıcı Adınız ve Şifreniz
                </p>
                <input type="email" name="email" placeholder="Email" required="" class="form-control" />
                <input type="password" name="sifre" placeholder="Password" required="" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">Giriş Yap</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            
        </div>
        <div id="signup" class="tab-pane">
            
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Giriş Yap</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Şifrenizi mi Unuttunuz</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Giriş Yap</a></li>
        </ul>
    </div>


</div>

      <!--END PAGE CONTENT -->     
          
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
