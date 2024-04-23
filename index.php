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
                  
               </div>
            </div>
           

            <!-- 1-3-block row start -->
            <div class="row">
              


          

<div class="col-lg-8" style="width: 100%;">
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Acı Biberi Kim Yiyicek 🌶😟😳🙁😋</h5>
                     </div>
                     <div class="card-block">
                      
   


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



<center><h1>Arkadaşın İle Oyna</h1></center>



<!-- İlk Kısım -->
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
    #score {
        font-size: 16px;
    }
    .jar {
        width: 200px;
        height: 200px;
        background-image: url('img/kavanoz.png');
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
        margin: 0 auto;
    }
    .sugar {
        width: 20px;
        height: 15px;
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
        <div id="sugar-container"></div>
    </div>
</div>

<div class="container" id="start-buttons">
    <button id="start-game" onclick="startGame()">Oyunu Başlat</button>
</div>

<div id="buttons" class="container" style="display: none;">
    <div class="button-group">
        <p>Lütfen kaç şeker seçmek istediğinizi belirtin:</p>
        <button onclick="selectSugar(1)" id="sugar1">1 Şeker</button>
        <button onclick="selectSugar(2)" id="sugar2">2 Şeker</button>
        <button onclick="selectSugar(3)" id="sugar3">3 Şeker</button>
    </div>
</div>

<div id="info" class="container"></div>
<div id="score" class="container"></div>

<script>
var remainingSugars = 29;
var currentPlayer = '';
var player1Score = 0;
var player2Score = 0;
var sugars = [];
var aciBiber;



function updateSugarPositions() {
    for (var i = 0; i < sugars.length; i++) {
        sugars[i].style.left = Math.floor(Math.random() * 120) + 15 + "px";
        sugars[i].style.bottom = Math.floor(Math.random() * 120) + 15 + "px";
    }
     aciBiber.style.left = "40px"; // Hata: Değişken ismi yanlış
    aciBiber.style.bottom = "25px"; // Hata: Değişken ismi yanlış
}

function startGame() {
    resetGame();
    document.getElementById("start-buttons").style.display = "none";
    document.getElementById("buttons").style.display = "block";
    var startingPlayer = Math.random() < 0.5 ? 'player1' : 'player2';
    currentPlayer = startingPlayer;
    updateInfo("Oyuncu " + (startingPlayer === 'player1' ? '1' : '2') + " başlıyor.");
    updateSugarPositions(); // Kavanozun içindeki şekerlerin pozisyonunu güncelle
}





function selectSugar(amount) {
    if (remainingSugars <= 0) {
        return; // Kalan şekerler 0 veya daha azsa, işlem yapma
    }
    remainingSugars -= amount;
    hideSugars(amount);
    updateInfo("Kalan şeker: " + remainingSugars);
    checkEndGame();
    currentPlayer = currentPlayer === 'player1' ? 'player2' : 'player1';
    updateInfo("Sıra Oyuncu " + (currentPlayer === 'player1' ? '1' : '2') + "de.");
    updateSugarButtons();
}

function checkEndGame() {
    if (remainingSugars <= 0) {
        var winner = currentPlayer === 'player1' ? '2' : '1'; // Burada düzeltme yapılacak
        updateInfo("Oyun bitti! Oyuncu " + winner + " kazandı!");
        document.getElementById("buttons").style.display = "none";
        updateScore(winner);
        document.getElementById("start-buttons").innerHTML = '<button onclick="startGame()">Yeniden Başla</button>';
        document.getElementById("start-buttons").style.display = "block";
    }
}

function updateInfo(text) {
    document.getElementById("info").innerText = text;
}

function updateScore(winner) {
    if (winner === '1') {
        player2Score++;
    } else {
        player1Score++;
    }
    document.getElementById("score").innerText = "Skor - Oyuncu 1: " + player1Score + " Oyuncu 2: " + player2Score;
}

function hideSugars(count) {
    for (var i = 0; i < count; i++) {
        sugars.pop().style.display = "none";
    }
    updateRemainingSugars();
}

function updateRemainingSugars() {
    document.getElementById("info").innerText = "Kalan şeker: " + remainingSugars;
}



function resetGame() {
    remainingSugars = 29;
    currentPlayer = '';
    sugars = [];
    updateRemainingSugars();
    updateSugar();
    updateSugarButtons();
}

function updateSugar() {
    var sugarContainer = document.getElementById("sugar-container");
    sugarContainer.innerHTML = '';
    for (var i = 0; i < remainingSugars; i++) {
        var sugar = document.createElement("div");
        sugar.classList.add("sugar");
        sugar.style.left = Math.random() * 180 + "px";
        sugarContainer.appendChild(sugar);
        sugars.push(sugar);
    }
     aciBiber = document.createElement("div");
    aciBiber.className = "acibiber"; // Hata: Değişken ismi yanlış
    sugarContainer.appendChild(aciBiber); // Hata: Değişken ismi yanlış
}

function updateSugarButtons() {
    document.getElementById("sugar1").disabled = remainingSugars < 1;
    document.getElementById("sugar2").disabled = remainingSugars < 2;
    document.getElementById("sugar3").disabled = remainingSugars < 3;
}
</script>












</div>


<!-- sol menü son -->




<div class="menu-content" id="center-content">
    




<!-- İkinci Kısım -->
<style>
    .container2 {
        text-align: center;
        margin-top: 50px;
    }
    #info2 {
        font-size: 18px;
        margin-top: 20px;
    }
    #think-gif2 {
        display: none;
        margin-top: 20px;
    }
    .jar2 {
        width: 200px;
        height: 200px;
        background-image: url('img/kavanoz.png');
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
        margin: 0 auto;
    }
    .sugaralt {
        width: 20px;
        height: 15px;
        background-image: url('img/seker.png');
        opacity: 0.8;
        background-size: cover;
        position: absolute;
        bottom: 0;
    }
    .acibiber2 {
        width: 100px;
        height: 100px;
        background-image: url('img/acibiber.png');
        opacity: 0.8;
        background-size: cover;
        position: absolute;
        bottom: 0;
    }
    .button-group2 {
        background-color: rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-radius: 8px;
        margin: 20px auto;
        width: fit-content;
    }
</style>

<div class="container2">
    <div class="jar2">
        <div id="sugar-container2"></div>
    </div>
</div>

<div class="container2" id="start-buttons2">
    <button id="bilgisayar2" onclick="kimBasladi('Bilgisayar2')">Bilgisayar Başlasın</button>
    <button id="ben2" onclick="kimBasladi('Ben2')">Ben Başlıyorum</button>
</div>

<div id="butonlar2" class="container2" style="display: none;">
    <div class="button-group2">
        <p>Lütfen kaç şeker seçmek istediğinizi belirtin:</p>
        <button onclick="secildi(1)">1 Şeker</button>
        <button style="background-color: #347837;" onclick="secildi(2)">2 Şeker</button>
        <button onclick="secildi(3)">3 Şeker</button>
    </div>
</div>

<div id="info2" class="container2"></div>

<center><img id="think-gif2" src="https://media1.tenor.com/m/eomT2hRxUYIAAAAC/pooh-think.gif" alt="Thinking Pooh" width="200"></center>

<script>
var kalanSeker2 = 29;
var beninSiram2 = true;
var beninSecimi2 = 0;
var sugars2 = [];
var aciBiber2;




function kimBasladi(kim2) {
    document.getElementById("start-buttons2").style.display = "none";
    document.getElementById("butonlar2").style.display = "block";
    //document.getElementById("info").innerText = kim + " başlıyorum.";
    document.getElementById("info2").innerText =  "Siz başlıyorsunuz.";
    if (kim2 === "Ben2") { // Hata: Karşılaştırma yanlış yapılmış
        beninSiram2 = true;
    } else {
        beninSiram2 = false;
        bilgisayarSecim2(); // Hata: Fonksiyon adı yanlış
    }
}

function secildi(miktar2) {
    kalanSeker2 -= miktar2; // Hata: Değişken ismi yanlış
    hideSugars2(miktar2); // Hata: Fonksiyon adı yanlış
    document.getElementById("info2").innerText = "Kalan şeker: " + kalanSeker2;

    if (kalanSeker2 <= 0) { // Hata: Değişken ismi yanlış
        document.getElementById("info2").innerText = "Oyun bitti! Kazandınız!";
        document.getElementById("butonlar2").style.display = "none";
        document.getElementById("start-buttons2").innerHTML = '<button onclick="window.location.reload();">Yeniden Başla</button>';
        return;
    }

    beninSiram2 = false; // Hata: Değişken ismi yanlış
    beninSecimi2 = miktar2; // Hata: Değişken ismi yanlış
    document.getElementById("butonlar2").style.display = "none";
    
    setTimeout(bilgisayarSecim2, 1000); // Hata: Fonksiyon adı yanlış
}

function bilgisayarSecim2() { // Hata: Fonksiyon adı yanlış
    document.getElementById("info2").innerText = "Bilgisayar düşünüyor...";
    document.getElementById("think-gif2").style.display = "block";
    setTimeout(function() {
        document.getElementById("think-gif2").style.display = "none";

        var secilen2;
        if (beninSiram2) {
            if (beninSecimi2 === 3) {
                secilen2 = 2;
            } else {
                secilen2 = 4 - beninSecimi2; // Hata: Değişken ismi yanlış
            }
        } else {
            if (kalanSeker2 % 4 === 0) { // Hata: Değişken ismi yanlış
                secilen2 = Math.floor(Math.random() * 3) + 1;
            } else {
                secilen2 = kalanSeker2 % 4; // Hata: Değişken ismi yanlış
            }
        }
        
        kalanSeker2 -= secilen2; // Hata: Değişken ismi yanlış
        hideSugars2(secilen2); // Hata: Fonksiyon adı yanlış
        document.getElementById("info2").innerText = "Bilgisayar " + secilen2 + " seçti. Kalan şeker: " + kalanSeker2;

        if (kalanSeker2 <= 0) { // Hata: Değişken ismi yanlış
            document.getElementById("info2").innerText = "Oyun bitti! Bilgisayar kazandı! Acı Biberi Yemelisin!";
            document.getElementById("butonlar2").style.display = "none";
            document.getElementById("start-buttons2").innerHTML = '<button onclick="window.location.reload();">Yeniden Başla</button>';
            return;
        }

        beninSiram2 = true; // Hata: Değişken ismi yanlış
        document.getElementById("butonlar2").style.display = "block";
    }, 2000);

}

function updateSugar2() { // Hata: Fonksiyon adı yanlış
    var sugarContainer2 = document.getElementById("sugar-container2"); // Hata: Değişken ismi yanlış
    sugarContainer2.innerHTML = ""; // Hata: Değişken ismi yanlış

    for (var i = 0; i < kalanSeker2; i++) { // Hata: Değişken ismi yanlış
        var sugar2 = document.createElement("div");
        sugar2.className = "sugar"; // Hata: Değişken ismi yanlış
        sugars2.push(sugar2); // Hata: Değişken ismi yanlış
        sugarContainer2.appendChild(sugar2); // Hata: Değişken ismi yanlış
    }
    
    aciBiber2 = document.createElement("div");
    aciBiber2.className = "acibiber2"; // Hata: Değişken ismi yanlış
    sugarContainer2.appendChild(aciBiber2); // Hata: Değişken ismi yanlış
    
    updateSugarPositions2(); // Hata: Fonksiyon adı yanlış
}

function updateSugarPositions2() { // Hata: Fonksiyon adı yanlış
    for (var i = 0; i < sugars2.length; i++) { // Hata: Değişken ismi yanlış
        sugars2[i].style.left = Math.floor(Math.random() * 120) + 15 + "px"; // Hata: Değişken ismi yanlış
        sugars2[i].style.bottom = Math.floor(Math.random() * 120) + 15 + "px"; // Hata: Değişken ismi yanlış
    }
    
    aciBiber2.style.left = "40px"; // Hata: Değişken ismi yanlış
    aciBiber2.style.bottom = "25px"; // Hata: Değişken ismi yanlış
}

function hideSugars2(count) { // Hata: Fonksiyon adı yanlış
    for (var i = 0; i < count; i++) {
        sugars2.pop().style.display = "none"; // Hata: Değişken ismi yanlış
    }
}

updateSugar2(); // Hata: Fonksiyon adı yanlış
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

    // Sayfa yüklenmesi tamamlandığında orta menüyü seç
    document.addEventListener('DOMContentLoaded', function() {
        selectMenu('center');
    });


       /*  eski olan
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

    */
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











