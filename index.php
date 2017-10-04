<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mahasiswa">
    <meta name="author" content="Fitri Syukriasari">

    <title>Ask Student</title>
    <!-- Bootstrap Core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
      <script src="lib/js/jquery.min.js"></script>
      <script src="lib/js/bootstrap.min.js"></script>
    <link href="lib/css/landing-page.css" rel="stylesheet">
    <link href="lib/css/css.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">ASK STUDENT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" data-target="#ModalAbout" data-toggle="modal">Info</a>
                    </li>
                    <li>
                        <a href="#" data-target="#ModalContact" data-toggle="modal">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h2>ASK STUDENT </h2>
                        <h3>KAMU TANYA KITA JAWAB</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="" data-target="#ModalLogin" data-toggle="modal" class="btn btn-warning btn-lg"><i class="fa fa-user fa-fw"></i> <span class="network-name">LOGIN</span></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    <!-- Modal Popup untuk Add--> 
    <div id="ModalAbout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tentang</h4>
            </div>

            <div class="modal-body" >
            ASK STUDENT <br>
            Dibuat untuk sarana informasi TANYA JAWAB Mahasiswa khusus mahasiswa UNSIQ. <br>
            Siapapun dapat mengakses (login) selagi masih terdaftar di Universitas Sains Al-Qur'an dan masih menempuh pendidikan.<br>
            Dengan menggunakan NIM dan password sesuai disamakan dengan NIM, anda sudah langsung bisa login.
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary"  data-dismiss="modal" aria-hidden="true">
                OK
              </button>
          </div>
        </div>
    </div>
    </div>
    <!-- end -->
    <!-- Modal Popup untuk Add--> 
    <div id="ModalContact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Kontak</h4>
            </div>

            <div class="modal-body">
            SIADEK V.01.2017 <br>
            Via email : <a href="mailto:askstudent@gmail.com?Subject=Assalamualaikum" > askstudent@gmail.com</a><br>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary"  data-dismiss="modal" aria-hidden="true">
                OK
              </button>
          </div>
        </div>
    </div>
    </div>
    <!-- end -->
    <!-- Modal Popup untuk Add--> 
    <div id="ModalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>

            <div class="modal-body">
              <form action="config/plogin.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nomor Induk Mahasiswa" name="user" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me <br>
                                Default < user : admin | 2014150097 > < pass : admin | 2014150097>
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                    </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a a href="#" data-target="#ModalAbout" data-toggle="modal">Info</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a a href="#" data-target="#ModalContact" data-toggle="modal">Kontak</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Ask Student V.01.2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
