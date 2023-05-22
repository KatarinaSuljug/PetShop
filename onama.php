<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Pet shop</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
<div class="container">
<div class="navbar">
    <div class="logo"></div>
        <img src="slikice/logoshop.png" width="125px">
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="home.php">Naslovna</a></li>
            <li><a href="product.php">Shop</a></li>
            <li><a href="onama.php">O nama</a></li>
            <?php
            include "spoj.php";
            session_start();
            if ($_SESSION == NULL) {
        ?>
        
          <div>
              <li><a href="register.php">Registracija</a></li>
              <li><a href="login.php">Prijava</a></li>
          </div>
        </section>
        <?php  
        } else {
        ?>
          <div>
                <li><a href="odjava.php">Odjava</a></li>
          </div>
        </section>
        <?php
        }
        ?>
        </ul>
    
        <a target="_blank" href= "cart.php">
        <img src="slikice/cart.png" width="30px" height="30px"></a>
    <img src="slikice/menu.png" class="menu-icon" onclick="menutoggle()"> 
</nav>

    


      <section id="insideshop">
      </section>

      <section id="onama_opis" class="section-p1">
        <div class="prviopis">
            <h2>Upoznajte nas!</h2><br>
        </div>
        <div class="slikica">
        <div class="col-2">
            <img class="slika" src="slikice/onama1.png">
        </div>
    </div>
        <div class="drugiopis">
            <p><h1>#ClanObitelji<h1><br>
Naša inicijativa #ClanObitelji ima za svrhu podići svijest o ispravnoj i kvalitetnoj brizi za kućne ljubimce.
Počevši od najbolje hrane i prikladne dijete pa sve do načina i stila života, sve su to bitni faktori o kojima treba brinuti. SVE vrste kućnih ljubimaca ovo zahtijevaju, čak i zaslužuju – to smo im obećali kada smo ih primili u svoj dom.

Vama poklanjamo opciju učlanjenja u naš klub vjernosti čime službeno postajete naš #ClanObitelji. Kao članovi, marljivo skupljajte bodove i ostvarite do 20% popusta na sve regularne artikle.</p>
        </div>
      </section>
      <section id="onama_opis2" class="section-p1">
        <div class="prviopis">
            <h2>Voliš li ga onoliko koliko on voli tebe?</h2>
        </div>
        <div class="slikica">
        <div class="col-2">
            <img class="slika" src="slikice/onama2.png">
        </div>
        <div class="drugiopis">
            <p>Pet Home Shop će uvijek težiti tome da kućnim ljubimcima pruži najbolje. Radilo se o proizvodu, običnom savjetu ili preporuci. Također, brinemo se i za one duše koje još nisu pronašle svoj „zauvijek“ dom redovito pomažući udrugama i organizacijama za nezbrinute životinje.

Pet Home Shop je specijalizirana trgovina za kućne ljubimce sa stručnim osobljem koje će vam pomoći u odabiru proizvoda prilikom posjete. Kod nas možete kupiti hranu za vašeg ljubimca, dodatke prehrani, kozmetiku, ali i visoko kvalitetnu opremu.

U Pet Home Shopu vjerujemo da bi ljubimci trebali biti članovi obitelji i da se tako prema njima trebamo i odnositi. Preuzeli smo tu odgovornost kada smo ih primili u svoj dom. Pružimo im najkvalitetniju prehranu, njegu, zabavu i pobrinimo se da žive zdrav i zadovoljan život. Bit će Vam beskrajno zahvalni!
        </div>
      </section>
      </body>


</html>