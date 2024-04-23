<?php 




require_once 'include/leftslider.php'; 

   


?>
 <!-- yanda açılan menü bu her birine tek tek yapmak yerine include yapıyorum ve url kontrol izinsiz girişi önelmek için-->
     


      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Anasayfa</h4>
               </div>
            </div>
           

            <!-- 1-3-block row start -->
            <div class="row">
              


          

<div class="col-lg-8" style="width: 100%;">
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Denemelerde Başarı Grafiğin</h5>
                     </div>
                     <div class="card-block">
                      
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Menü</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            transition: background-color 0.5s; /* Geçiş efekti */
        }
        .menu {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #ffffff;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            left: 0;

        }
        .menu-item {
            flex: 1;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;

        }
        .menu-item:hover {
             transform: scale(1.1); /* Üzerine gelindiğinde büyütme efekti */
            background-color: rgba(0, 150, 255, 0.1); /* Üzerine gelindiğinde arka plan rengi */
        }
        .menu-item.active {
             border-radius: 10px;
            background-color: rgba(0, 150, 255, 0.3); /* Seçili menü arka plan rengi */
        }
        .menu-item img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        .menu-content {
            display: none;
        }
        .menu-content.active {
            display: block;
        }
    </style>
</head>
<body>

<div class="menu">
    <div class="menu-item" onclick="selectMenu('left')">
        <img id="left-img" src="img/sol.png" alt="Görsel 1">
    </div>
    <div class="menu-item" onclick="selectMenu('center')">
        <img id="center-img" src="img/anasayfa.png" alt="Görsel 2">
    </div>
    <div class="menu-item" onclick="selectMenu('right')">
        <img id="right-img" src="img/sag.png" alt="Görsel 3">
    </div>
</div>


<!-- sol menü başlangıç -->
<div class="menu-content" id="left-content">



sol















</div>


<!-- sol menü son -->




<div class="menu-content" id="center-content">
    






    <style>
        body {
            background-color: #f3f3f3;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
        #info {
            font-size: 18px;
            margin-top: 20px;
        }
        #think-gif {
            display: none;
            margin-top: 20px;
        }
        .jar {
            width: 400px;
            height: 400px;
            background-image: url('img/kavanoz.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            margin: 0 auto;
        }
        .sugar {
            width: 40px;
            height: 30px;
            background-image: url('img/seker.png');
            opacity: 0.8;
            background-size: cover;
            position: absolute;
            bottom: 0;
        }
        .acibiber {
            width: 100px;
            height: 100px;
            background-image: url('img/acibiber.png');
            opacity: 0.8;
            background-size: cover;
            position: absolute;
            bottom: 0;
        }
        .button-group {
            background-color: rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 8px;
            margin: 20px auto;
            width: fit-content;
        }
    </style>

    <div class="container">
        <div class="jar">
            <!-- İçindeki şeker miktarı kadar şeker gösterimi -->
            <div id="sugar-container"></div>
        </div>
    </div>

    <div class="container" id="start-buttons">
        <button id="bilgisayar" onclick="kimBasladi('Bilgisayar')">Bilgisayar Başlasın</button>
        <button id="ben" onclick="kimBasladi('Ben')">Ben Başlıyorum</button>
    </div>
    
    <div id="butonlar" class="container" style="display: none;">
        <div class="button-group">
            <p>Lütfen kaç şeker seçmek istediğinizi belirtin:</p>
            <button onclick="secildi(1)">1 Şeker</button>
            <button style="background-color: #347837;" onclick="secildi(2)">2 Şeker</button>
            <button onclick="secildi(3)">3 Şeker</button>
        </div>
    </div>

    <div id="info" class="container"></div>

    <center><img id="think-gif" src="https://media1.tenor.com/m/eomT2hRxUYIAAAAC/pooh-think.gif" alt="Thinking Pooh" width="200"></center>

    <script>
    var kalanSeker = 29;
    var beninSiram = true;
    var beninSecimi = 0;
    var sugars = [];
    var aciBiber;

    function kimBasladi(kim) {
        document.getElementById("start-buttons").style.display = "none";
        document.getElementById("butonlar").style.display = "block";
        //document.getElementById("info").innerText = kim + " başlıyorum.";
        document.getElementById("info").innerText =  "Siz başlıyorsunuz.";
        if (kim === "Ben") {
            beninSiram = true;
        } else {
            beninSiram = false;
            bilgisayarSecim();
        }
    }

    function secildi(miktar) {
        kalanSeker -= miktar;
        hideSugars(miktar);
        document.getElementById("info").innerText = "Kalan şeker: " + kalanSeker;

        if (kalanSeker <= 0) {
            document.getElementById("info").innerText = "Oyun bitti! Kazandınız!";
            document.getElementById("butonlar").style.display = "none";
            document.getElementById("start-buttons").innerHTML = '<button onclick="window.location.reload();">Yeniden Başla</button>';
            return;
        }

        beninSiram = false;
        beninSecimi = miktar;
        document.getElementById("butonlar").style.display = "none";
        
        setTimeout(bilgisayarSecim, 1000);
    }

    function bilgisayarSecim() {
        document.getElementById("info").innerText = "Bilgisayar düşünüyor...";
        document.getElementById("think-gif").style.display = "block";
        setTimeout(function() {
            document.getElementById("think-gif").style.display = "none";

            var secilen;
            if (beninSiram) {
                if (beninSecimi === 3) {
                    secilen = 2;
                } else {
                    secilen = 4 - beninSecimi;
                }
            } else {
                if (kalanSeker % 4 === 0) {
                    secilen = Math.floor(Math.random() * 3) + 1;
                } else {
                    secilen = kalanSeker % 4;
                }
            }
            
            kalanSeker -= secilen;
            hideSugars(secilen);
            document.getElementById("info").innerText = "Bilgisayar " + secilen + " seçti. Kalan şeker: " + kalanSeker;

            if (kalanSeker <= 0) {
                document.getElementById("info").innerText = "Oyun bitti! Bilgisayar kazandı!";
                document.getElementById("butonlar").style.display = "none";
                document.getElementById("start-buttons").innerHTML = '<button onclick="window.location.reload();">Yeniden Başla</button>';
                return;
            }

            beninSiram = true;
            document.getElementById("butonlar").style.display = "block";
        }, 2000);

    }

    function updateSugar() {
        var sugarContainer = document.getElementById("sugar-container");
        sugarContainer.innerHTML = "";

        for (var i = 0; i < kalanSeker; i++) {
            var sugar = document.createElement("div");
            sugar.className = "sugar";
            sugars.push(sugar);
            sugarContainer.appendChild(sugar);
        }
        
        aciBiber = document.createElement("div");
        aciBiber.className = "acibiber";
        sugarContainer.appendChild(aciBiber);
        
        updateSugarPositions();
    }

    function updateSugarPositions() {
        for (var i = 0; i < sugars.length; i++) {
            sugars[i].style.left = Math.floor(Math.random() * 250) + 30 + "px";
            sugars[i].style.bottom = Math.floor(Math.random() * 250) + 30 + "px";
        }
        
        aciBiber.style.left = "140px";
        aciBiber.style.bottom = "100px";
    }

    function hideSugars(count) {
        for (var i = 0; i < count; i++) {
            sugars.pop().style.display = "none";
        }
    }

    updateSugar();
    </script>







</div>


<!-- orta son --> 
<div class="menu-content" id="right-content">Sağ Menü İçeriği</div>

<script>
    function selectMenu(menu) {
        // Tüm menü öğelerini başlangıçta sıfırla
        document.querySelectorAll('.menu-item').forEach(item => {
            item.classList.remove('active');
        });

        // Seçilen menüyü aktif hale getir
        document.getElementById(menu + '-img').parentNode.classList.add('active');

        // Tüm menü içeriklerini gizle
        document.querySelectorAll('.menu-content').forEach(content => {
            content.classList.remove('active');
        });

        // Seçilen menü içeriğini göster
        document.getElementById(menu + '-content').classList.add('active');
    }
</script>

</body>
</html>


<br><br><br><br>



                        <!-- bu üst kısım yandaki grafik harici css yapmak istemedim ve js direk burada yaptım -->

                     </div>
                  </div>
               </div>




           



           

            <!-- 2-1 block end -->
         </div>
           <!-- Alt SAĞ ALT BUTON-->
         <div class="fixed-button">
            <a href="#!" class="btn btn-md btn-primary">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> Belki Eklerim
            </a>
         </div>

      </div>
   </div>


  
<?php include 'include/alt.php'; ?>











