<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laundry Warohmah! | </title>

    <!-- Bootstrap -->
    <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
</head>

<?php include_once '../template/sidebar.php' ?>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt=""><?php echo $_SESSION['data']['username'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <form action="../../routers/r_login.php?aksi=logout" method="POST">
                    <button class="dropdown-item" ><i class="fa fa-sign-out pull-right" name="logout"></i> Log Out</button>
                    </form>
                  </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
    <div class="row" style="display: inline-block;">
       <center> <div class=" top_tiles" style="margin: ;">
</head>
<body>	
	<div class="container">
		<div class="jumbotron 200px">
        <img src=../../assets/images/laundrypoto.png hight=600px width=500px>
			<h1>Welcome Laundry Warohmah</h1> 
			<h6>
				Cucian anda ingin tampak bersih kembali seperti semula? <br/>
				Tenang kami punya solusinya <br/>
				Di laundry warohmah, cucian anda akan bersih kembali seperti barang baru.
                Dengan harga murah, waktu cepat dan packing terbaik.			
</h6> 
			<p>
                
				<button class="btn btn-lg btn-primary">This is Home Kasir</button>
        
			</p>
		</div>
		
	</div>
</body>
</head>
</center>
        </div>

    </div>
    <br />

</div>
</div>
<!-- /page content -->

<!-- footer content -->


<!-- jQuery -->
<script src="../../assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../../assets/vendors/nprogress/nprogress.js"></script>
<!-- jQuery Sparklines -->
<script src="../../assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../../assets/build/js/custom.min.js"></script>

</body>

</html>