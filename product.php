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

    <div class="small-container">
        <div class="row row-2">
            <h2>Svi proizvodi</h2>
            <select>
                <option>Default sortiranje</option>
                <option>Sortiranje po cijeni</option>
                <option>Sortiranje po popularnosti</option>
                <option>Sortiranje po ocjeni</option>
                <option>Sortiraj najprodavanije</option>


            </select>
        </div>
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
                <a href="product_details.php" class="btn">Dodaj u košaricu</a>

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
                <div class="page-btn">
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>&#8594</span>
        
        
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