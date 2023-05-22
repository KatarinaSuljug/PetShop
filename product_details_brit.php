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
    
    <img src="slikice/cart.png" width="30px" height="30px">
    <img src="slikice/menu.png" class="menu-icon" onclick="menutoggle()"> 
</nav>

</div>

<!---------single product details----->
<div class="small-container single product">
    <div class="row">
        <div class="col-2">
            <img src="slikice/product2.jpg" width="100%" id="productImg" >

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="slikice/product2.jpg" width="100%" class="small-img">
                </div>
            
                <div class="small-img-col">
                    <img src="slikice/remi2.png" width="100%" class="small-img">
                </div>
            
                <div class="small-img-col">
                    <img src="slikice/remi3.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        
    
        <div class="col-2">
            <p>Home/</p>
            <h1>Hrana za mačke Brit </h1>
            <h4>$10.00</h4>
            <select>
                <option> Izaberi veličinu</option><br>
                <option> XL</option>
                <option> L</option>
                <option> M</option>
                <option> S</option>

            </select>
            <input type="number" value="1">
            <a href="" class="btn">Dodaj u košaricu</a>
            <h3>Detalji o proizvodu <i class="fa fa-indent"></i>
            </h3><br>
            <p>Potpuna hrana za mačiće te skotne mačke i mačke u laktaciji.

               SASTAV: dehidrirana piletina 40%, riža, pileća mast, grašak, dehidrirani losos 4%, sušena pulpa jabuke, hidrolizirana pileća jetra 2%, lososovo ulje 2%, sušeni špinat 0,5%, manan oligosaharidi (150 mg/kg), voćni oligosaharidi (120 mg/kg), Mojave juka (80 mg/kg), sušeni ružmarin (12 mg/kg), sušeni klinčić (12 mg/kg), sušeni agrumi (12 mg/kg), sušena kurkuma (12 mg/kg).
                </p>
        </div>
    </div>
</div>
<!---------title------>
<div class="small-container">
    <div class="row row-2">
        <h2>Slični proizvodi</h2>
        <p>View more</p>
    </div>
</div>



<!-------products-------->
    <div class="small-container">
        
        
        
            <div class="row">
                <div class="col-4">
                    <img src="slikice/product5.jpg">
                    <h4>Suha mačja hrana Brit</h4>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
    
    
                    </div>
                    <p>$10.00</p>
                </div>
                <div class="col-4">
                    <img src="slikice/product6.jpg">
                    <h4>Suha mačja hrana</h4>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
    
    
                    </div>
                    <p>$10.00</p>
                </div>
                <div class="col-4">
                    <img src="slikice/product7.jpg">
                    <h4>Suha mačja hrana</h4>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
    
    
                    </div>
                    <p>$10.00</p>
                </div>
                <div class="col-4">
                    <img src="slikice/product8.jpg">
                    <h4>Suha mačja hrana</h4>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
    
    
                    </div>
                    <p>$10.00</p>
                </div>
                
               


<!-----footer------------>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Konzultirajte se s našim veterinarima</h3>
                <p>U našim prodavaonicama možete se konzultirati o zdravlju vašeg ljubimca sa veterinarima.
                </p>
            </div>
            <div class="footer-col-2">
                <img src="slikice/logoshop.png">
                <p>Nudimo Vam samo najkvalitenije hranu za sve potrebe Vašeg kućnog ljubimca.
                </p>
            </div>
            <div class="footer-col-3">
                <ul>
                <h3>Korisni linkovi</h3>
                <li>O nama</li>
                <li>Obavijesti za potrošaće</li>
                <li>Uvjeti korištenja</li>
                <li>Uvjeti kupnje</li>
            </ul>
            </div>
            <div class="footer-col-4">
                <ul>
                <h3>Zaprati nas na:</h3>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>Youtube</li>
            </ul>
            </div>
        </div>
    </div>
</div>

<!-------toggle menu------->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight="0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight="0px"){
            MenuItems.style.maxHeight="200px";

        }
        else{
            MenuItems.style.maxHeight="0px";

        }
    }
</script>
<!-------product gallery-->
<script>
    var productImg= document.getElementById("productImg");
    var SmallImg= document.getElementsByClassName("small-img")

        SmallImg[0].onclick=function(){
            productImg.src=SmallImg[0].src;
        }
        SmallImg[1].onclick=function(){
            productImg.src=SmallImg[1].src;
        }
        SmallImg[2].onclick=function(){
            productImg.src=SmallImg[2].src;
        }
        
</script>

</body>
<html>