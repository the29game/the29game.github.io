<?php

// Eğer kullanıcı oturumu başlatmışsa ve çıkış yap butonuna tıklarsa
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // Oturumu sonlandır
    session_unset();
    session_destroy();
    // Kullanıcıyı giriş sayfasına yönlendir
    header("Location: ../index.php");
    exit;
} else {
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Ana Sayfa</title>
 
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <!-- <a href="index.php" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
         -->
          <a href="index.php" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo" ></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
         
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
              <div class="upgrade-button">
                <a href="#" class="icon-circle txt-white btn btn-sm btn-primary upgrade-button">
                    <span>Belki Eklerim</span>
                </a>
              </div>

               <ul class="top-nav">


                 
                 
                  <!-- Kullanıcı menüsü-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                      <!--   <span><img class=" " src="assets/images/logo.png" style="width:100px; object-fit: cover;"  alt="User Image"></span>
                        <span>adadad<b>soyadd</b> <i class=" icofont icofont-simple-down"></i></span>
                       -->

                        <span>The 29 <b>Games</b> <i class=" icofont icofont-simple-down"></i></span>
                     </a>
                     <ul class="dropdown-menu settings-menu">
                      
                        <li><a href="index.php"><i class="icon-user"></i> Anasayfa</a></li>
                        <li><a href="iletisim.php"><i class="icon-briefcase"></i>Nasıl Oynanır?</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                       
                        <li><a href="../index.php"><i class="icon-logout"></i> Çıkış yap</a></li>
                        <!-- bunun için yukarı kod yazıcam eğer basarsa oturum sonlandırıcak bu sayede güvenliği bir tık artırırı -->

                     </ul>
                  </li>
               </ul>

            
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">--- Yönetim</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.php">
                        <i class="icon-speedometer"></i><span> Anasayfa</span>
                    </a>                
                </li>
                <li class="nav-level">--- İçerikler</li>
              

                
               
                

             
                  <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-envelope-open"></i><span>  Nasıl Oynanır?</span><span class="label label-success menu-caption">Yeni</span><i class="icon-arrow-down"></i></a>
                      <ul class="treeview-menu">
                   <li><a class="waves-effect waves-dark" href="iletisim.php"><i class="icon-envelope-open"></i> Hakkımızda ve Nasıl Oynanır?</a></li>
                        
                    </ul>
                </li>

             
                
            </ul>
         </section>
      </aside>