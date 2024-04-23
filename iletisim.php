
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
                      
                        <li><a href="index.html"><i class="icon-user"></i> Anasayfa</a></li>
                        <li><a href="iletisim.html"><i class="icon-briefcase"></i>Nasıl Oynanır?</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                       
                        <li><a href="#"><i class="icon-logout"></i> Çıkış yap</a></li>
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
                   <li><a class="waves-effect waves-dark" href="iletisim.html"><i class="icon-envelope-open"></i> Hakkımızda ve Nasıl Oynanır?</a></li>
                        
                    </ul>
                </li>

             
                
            </ul>
         </section>
      </aside>
 <!-- yanda açılan menü bu her birine tek tek yapmak yerine include yapıyorum ve url kontrol izinsiz girişi önelmek için-->
     


<style type="text/css">


 h1 {
    margin-bottom: 75px;
    padding: 0 20vw;
    font: 400 56px 'Roboto Slab', serif;
    font-size: 56px;
    text-align: center;
    color: #fff;
}
 .form__contact {
    max-width: 70%;
    max-height:  auto;
    margin: 0 auto;
    border-left: 30px solid white; /* kenar çizgisi aşağı inen kırmızı */
    border-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI0MS44NnB4IiBoZWlnaHQ9IjUyLjMyNnB4IiB2aWV3Qm94PSIwIDAgNDEuODYgNTIuMzI2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0MS44NiA1Mi4zMjYiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0wLDB2MjUuMTYzaDcuMDk3YzAuNTAxLTQuOTg5LDQuNzEyLTguODg0LDkuODMzLTguODg0YzUuNDU4LDAsOS44ODQsNC40MjUsOS44ODQsOS44ODRzLTQuNDI1LDkuODg0LTkuODg0LDkuODg0Yy01LjEyMSwwLTkuMzMyLTMuODk1LTkuODMzLTguODg0SDB2MjUuMTYzaDQxLjg2VjBIMHoiLz48L3N2Zz4=) 5% 100% repeat;
    border-image-width: 0px 0px 0px 30px;
    transform: translateY(100%);
    animation: init 1s ease-in-out forwards;
}
 .form__contact fieldset {
    position: relative;
    margin: 0;
    padding: 30px 30px 40px 80px;
    border: none;
    border-radius: 0 20px 20px 0;
    font: 24px 'Shadows Into Light', cursive;
    background: #fff linear-gradient(rgba(0, 0, 0, .1) 1px, transparent 0) 0 20px / 100% 40px; /* sondaki 40px ten satır aralığı */
    font-size: 35px;
}
 .form__contact fieldset:after {
    position: absolute;
    top: 0;
    left: 50px;
    content: '';
    height: 100%;
    width: 1px;
    border-left: double #e08183;
}
 .form__contact p {
    margin: 0 0 40px 0;
    line-height: 40px;
    color: #333;
    font-size: 26px;
}
 .form__contact span {
    position: relative;
    line-height: 40px;
    font-size: 26px;
}
 .form__contact button {
    margin-top: 40px;
    float: right;
    border: none;
    font-family: 'Shadows Into Light', cursive;
    color: #e08183;
    background: transparent;
    cursor: pointer;
    transition: transform 0.25s ease;
}
 .form__contact button:hover {
    transform: translateX(10px);
}
 .form__field {
    display: inline;
    color: #7db665;
    outline: none;
}
 .form__field:empty {
    display: inline-block;
    color: #ddd;
}
 .form__field:empty:before, .form__field:empty:focus:before {
    content: attr(data-placeholder);
}
 svg {
    display: none;
}
 @keyframes init {
    75% {
       transform: translateY(-20px);
   }
    100% {
       transform: translateY(0);
   }
}
 @keyframes do-blur {
    0% {
       filter: url(#blur4);
   }
    25% {
       filter: url(#blur3);
   }
    50% {
       filter: url(#blur2);
   }
    75% {
       filter: url(#blur1);
   }
    100% {
       filter: url(#blur0);
   }
}
 



/* Mobil cihazlar için CSS ayarları */
@media (max-width: 768px) {
   h1 {
    margin-bottom: 75px;
    padding: 0 20vw;
    font: 400 56px 'Roboto Slab', serif;
    font-size: 20px;
    text-align: center;
    color: #fff;
}
 .form__contact {
    max-width: 90%;
    max-height:  auto;
    margin: 0 auto;
    border-left: 30px solid white; /* kenar çizgisi aşağı inen kırmızı */
    
    border-image-width: 0px 0px 0px 30px;
    transform: translateY(100%);
    animation: init 1s ease-in-out forwards;
}
 .form__contact fieldset {
    position: relative;
    margin: 0;
    padding: 30px 30px 40px 80px;
    border: none;
    border-radius: 0 20px 20px 0;
    font: 24px 'Shadows Into Light', cursive;
    background: #fff linear-gradient(rgba(0, 0, 0, .1) 1px, transparent 0) 0 20px / 100% 40px; /* sondaki 40px ten satır aralığı */
    font-size: 15px;
}
 .form__contact fieldset:after {
    position: absolute;
    top: 0;
    left: 50px;
    content: '';
    height: 100%;
    width: 1px;
    border-left: double #e08183;
}
 .form__contact p {
    margin: 0 0 40px 0;
    line-height: 40px;
    color: #333;
    font-size: 15px;
}
 .form__contact span {
    position: relative;
    line-height: 40px;
    font-size: 16px;
}
 .form__contact button {
    margin-top: 40px;
    float: right;
    border: none;
    font-family: 'Shadows Into Light', cursive;
    color: #e08183;
    background: transparent;
    cursor: pointer;
    transition: transform 0.25s ease;
}
}
</style>
<div class="wrapper" >
  <h1></h1>
  
  <form class="form__contact" action="" >
    <fieldset >
      <p >Merhaba, <span class="form__field field--name"> The 29 Games Ailesi!</span></p>
      <p > Oyun <span class="form__field field--name"   data-placeholder="İsmim" tabindex="1" > Nasıl Oynanır? </span> <br> Oyunda 29 şeker ve 1 adet acı biber vardır. <span class="form__field field--message"   data-placeholder=" [Konu]" tabindex="2" contenteditable><br>[*] Oyun 29 şekerden başlar ve sıra sıra seçilen durumlara göre ilerler. <br>[**] Üç seçim hakkınız vardır: Ya kavanozdaki şeker sayısını bir azaltmak için +1 seçersiniz, ya iki azaltmak için +2 seçersiniz, ya da üç azaltmak için +3 seçersiniz. </span>.</p>
      <p>[***] Ardından sıra diğer rakibe geçer.<span class="form__field field--email"  data-placeholder="email address" tabindex="3" > Bu şekilde devam edildikten sonra şeker sayısını sıfıra indiren kazanır ve diğer oyuncu ceza olarak acı biber yer.</span>.</p>
      <p >Bizler özgür geliştiricileriz<br> Diğer projelerimize ulaşarak bizlere destek olabilirsiniz. <hr> Geliştiriciler: <li>Besat Arif - Bilgisayar Mühendisi <br>(dusunurlerdergisi.com 'un kurucusu)</li><li>Reşat Berk - Fizik <br>(MathPath Console'un Kurucusu)</li> </p>
     
    </fieldset>
  </form>
</div>

<!--   <form class="form__contact" action="" >
    <fieldset style="font-size: 35px;">
      <p style="font-size: 26px;">Merhaba, <span class="form__field field--name"> <?= $ogrenci['ogr_ad']; ?>!</span></p>
      <p style="font-size: 26px;"> Ben <span class="form__field field--name"  style="font-size: 26px;" data-placeholder="İsmim" tabindex="1" >Güven Dershanesi</span> ve bir konuda yardıma ihtiyacın var sanırım? <span class="form__field field--message"  style="font-size: 26px;" data-placeholder=" [Konu]" tabindex="2" contenteditable></span>.</p>
      <p style="font-size: 26px;">Bu benim E-Postam <span class="form__field field--email" style="font-size: 26px;" data-placeholder="email address" tabindex="3" contenteditable></span>.</p>
      <p style="font-size: 26px;">Yakında iletişime geçmenizi umuyorum. Sevgilerle </p>
      <button type="submit" class="button button--xlarge" tabindex="4">Mesajı Yardım Merkezimize Gönder &#187;</button>
    </fieldset>
  </form>
</div>
--> 


  

   <!-- Required Jqurey -->
   <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
