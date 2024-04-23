<?php 


require_once 'include/leftslider.php'; 

   


?>
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


  
<?php include 'include/alt.php'; ?>
