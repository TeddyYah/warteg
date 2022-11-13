<?php 
session_start();
include 'koneksi.php';
 
if (!isset($_SESSION['admin']))
{
  echo "<script>alert('Login dulu ea');</script>";
  echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kirara via Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Kirara</a> 
            </div>
  <div style="color: white;

padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Teddy Hermansyah</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="index.php?halaman=hidangan"><i class="glyphicon glyphicon-cutlery"></i> Hidangan</a></li>
                    <li><a href="index.php?halaman=pembelian"><i class="glyphicon glyphicon-shopping-cart"></i> Pembelian</a></li>
                    <li><a href="index.php?halaman=laporan_pembelian"><i class="glyphicon glyphicon-book"></i> Laporan</a></li>
                    <li><a href="index.php?halaman=logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                     
                </ul>
               
            </div>
            
        </nav>
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                  if (isset($_GET['halaman']))
             {
                if ($_GET['halaman']=='hidangan')
                {
                    include 'hidangan.php';
                }
                elseif ($_GET['halaman']=='pembelian') 
                {
                    include 'pembelian.php';
                }
                elseif ($_GET['halaman']=='detail') 
                {
                    include 'detail.php';
                }
                elseif ($_GET['halaman']=='tambah_hidangan') 
                {
                    include 'tambah_hidangan.php';
                }
                elseif ($_GET['halaman']=='hapus_hidangan') 
                {
                    include 'hapus_hidangan.php';
                }
                elseif ($_GET['halaman']=='ubah_hidangan')
                {
                    include 'ubah_hidangan.php';
                }
                elseif ($_GET['halaman']=='menerima_pembayaran')
                {
                    include 'menerima_pembayaran.php';
                }
                elseif ($_GET['halaman']=='logout') 
                {
                  include 'logout.php';
                }
                elseif ($_GET['halaman']=='laporan_pembelian')
                {
                    include 'laporan_pembelian.php';
                }
                elseif ($_GET['halaman']=='cetak_detail')
                {
                    include 'cetak_detail.php';
                }
                elseif ($_GET['halaman']=='ubah_status')
                {
                    include 'ubah_status.php';
                }
            }
            else
             {
                include 'home.php';
             }
             ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
