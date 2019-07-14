<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","new folder");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
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
                
                <a class="navbar-brand" href="index.html">Alakadar Store</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="woddy.jpg" class="user-image img-responsive"/>
          </li>
                    <li> <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home </a> </li>
                    <li> <a href="index.php?halaman=produk"><i class="fa fa-dashboard fa-3x"></i> Produk </a> </li>
                    
                    <li> <a href="index.php?halaman=pembelian"><i class="fa fa-dashboard fa-3x"></i> Pembelian </a> </li>
                </ul>
               
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) 
                {
                    if ($_GET['halaman']=="produk") 
                    {
                        include'produk.php';
                    }
                    elseif ($_GET['halaman']=="pembelian") 
                    {
                        include'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan") 
                    {
                        include'pelanggan.php';
                    }
                }
                else
                {
                    include 'Home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        
         <footer class="bg-dark text-white p-5">
        <div class="row">
          <div class="col-md-3">
            <h5> SOSIAL MEDIA </h5>
            <ul>
              <li> Instagram : @alakadarstore </li>
              <li> Facebook : Alakadar Store Indonesia </li>
            </ul>
          </div>

          <div class="col-md-3">
            <h5> KERJA SAMA </h5>
            <ul> 
            <li> J&T </li>
            <li> POS. INDONESIA </li>
            <li> JNE </li>
            <li> Si Cepat</li>
            <li> TIKI </li>
            </ul>
          </div>

          <div class="col-md-3  ">
            <h5> HUBUNGI KAMI </h5>
            <li> 0876 4756 3475 </li>
            <li> 0877 8475 4859 </li>
            <li> 0877 2453 2353 </li>
            <li> alakadarstoreind@gmail.com</li>

          </div>
        </div>
      </footer>

       <div class="copyright text-center text text-black font-weight-bold bg-primary p-2">
        <p> Copyright &copy 2019 </p>
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