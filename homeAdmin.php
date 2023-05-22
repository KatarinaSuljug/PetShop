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
            <li><a href="onama.php">O nama</a></li>
            <li><a href="unosispis.php">Ispit</a><li>
            <li><a href="unosproizvoda.php">Unos</a><li>
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


<div class="row">
    <div class="col-2">
        <h1>Postani dio Pet Kluba!</h1>
        <p>Učlani se u Pet Klub i ostvari bodove koji ti donose popuste.</p>
        <a href="" class="btn">Posebne ponude &#8594;</a>
    </div>

    <div class="slikica">
        <div class="col-2">
            <img class="slika" src="slikice/pets.png">
        </div>
    </div>
</div>
</div>
</div>

<!-----featured categories------------>
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="slikice/mace.jpg">
                </div>

                <div class="col-3">
                    <img src="slikice/doggies.jpg">
                </div>
                <div class="col-3">
                    <img src="slikice/bunnies.jpg">
                </div>

            </div>
        </div>
       
    </div>
<!-----featured products------------>
    <div class="small-container">
        <h2 class="title">Odabrani proizvodi</h2>
        <div class="row">
            <div class="col-4">
                <img src="slikice/product1.jpg">
                <h4>Suha mačja hrana</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>


                </div>
                <p>$10.00</p>
                <a href="product_details.php" class="btn">Dodaj u košaricu</a><!--------vrijedi samo za ovu-->
            </div>
            <div class="col-4">
                <img src="slikice/product2.jpg">
                <h4>Suha mačja hrana</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>


                </div>
                <p>$10.00</p>
                <a href="" class="btn">Dodaj u košaricu</a>

            </div>
            <div class="col-4">
                <img src="slikice/product3.jpg">
                <h4>Suha mačja hrana</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>


                </div>
                <p>$10.00</p>
                <a href="" class="btn">Dodaj u košaricu</a>

            </div>
            <div class="col-4">
                <img src="slikice/product4.jpg">
                <h4>Suha mačja hrana</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>


                </div>
                <p>$10.00</p>
                <a href="" class="btn">Dodaj u košaricu</a>

            </div>
        </div>
            <h2 class="title">Najnoviji proizvodi</h2>
            <div class="row">
                <div class="col-4">
                    <img src="slikice/product5.jpg">
                    <h4>Suha mačja hrana</h4>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
    
    
                    </div>
                    <p>$10.00</p>
                    <a href="" class="btn">Dodaj u košaricu</a>

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
                    <a href="" class="btn">Dodaj u košaricu</a>

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
                    <a href="" class="btn">Dodaj u košaricu</a>

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
                    <a href="" class="btn">Dodaj u košaricu</a>

                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="slikice/product9.jpg">
                        <h4>Suha mačja hrana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
        
        
                        </div>
                        <p>$10.00</p>
                        <a href="" class="btn">Dodaj u košaricu</a>

                    </div>
                    <div class="col-4">
                        <img src="slikice/product10.jpg">
                        <h4>Suha mačja hrana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
        
        
                        </div>
                        <p>$10.00</p>
                        <a href="" class="btn">Dodaj u košaricu</a>

                    </div>
                    <div class="col-4">
                        <img src="slikice/product11.jpg">
                        <h4>Suha mačja hrana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
        
        
                        </div>
                        <p>$10.00</p>
                        <a href="" class="btn">Dodaj u košaricu</a>

                    </div>
                    <div class="col-4">
                        <img src="slikice/product12.jpg">
                        <h4>Suha mačja hrana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
        
        
                        </div>
                        <p>$10.00</p>
                        <a href="" class="btn">Dodaj u košaricu</a>

                    </div>
                </div>
            </div>  
<!-----ponuda------------>
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="slikice/product13.jpg" class="offer-img">
            </div>
            <div class="col-2">
                <p> Izdvajamo ovaj tjedan</p>
                <h1>ROYAL CANIN FBN KITTEN Maine Coon</h1>
                <small>Potpuna i uravnotežena hrana za mačke, specijalno za mačiće pasmine Maine Coon do 15 mjeseci starosti.

                   <br> SASTOJCI: dehidrirani proteini peradi, životinjska mast, riža, izolat biljnih proteina, kukuruz, pšenično brašno, hidrolizat životinjskih proteina, biljna vlakna, repina pulpa, kvasci i njihovi dijelovi, riblje ulje, sojino ulje, fruktooligosaharidi, minerali, ljuske i sjemenke psylliuma, hidrolizirani kvasac (izvor mananoligosaharida), boražino ulje, ekstrakt nevena (izvor luteina), hidrolizat ljuskara (izvor glukozamina), hidrolizat hrskavice (izvor hondroitina).</small>
                    <br><a href="" class="btn">Dodaj u košaricu &#8594</a>
                </div>
        </div>
    </div>
</div>
</div>
<!-----brands------------>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                    <div class="col-5">
                        <img src="slikice/brand1.png">
                    </div>
                    <div class="col-5">
                        <img src="slikice/brand2.png">
                    </div>
                    <div class="col-5">
                        <img src="slikice/brand6.png">
                    </div>
                    <div class="col-5">
                        <img src="slikice/brand4.png">
                    </div>
                    <div class="col-5">
                        <img src="slikice/brand5.png">
                    </div>
                </div>
            </div>
        </div>
        
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
</body>
<html>