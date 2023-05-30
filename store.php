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
                <?php 
                    $product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id";
                    $run_query = mysqli_query($conn,$product_query);
                    if(mysqli_num_rows($run_query) > 0){
                        while($row = mysqli_fetch_array($run_query)){
                            $pro_id    = $row['product_id'];
                            $pro_cat   = $row['product_cat'];
                            $pro_title = $row['product_title'];
                            $pro_price = $row['product_price'];
                            $pro_image = $row['product_image'];
                            
                            $cat_name = $row["cat_title"];
                            echo "
                                    <div class='row'>
                                        <a href='product_details.php?p=$pro_id'>
                                            <img src='slikice/$pro_image' style='max-height: 250px; max-width: 250px;'>
                                        </a>
                                        <div class='product-body'>
                                            <p class='product-category'>$cat_name</p>
                                            <h3 class='product-name header-cart-item-name'><a href='product_details.php?p=$pro_id'>$pro_title</a></h3>
                                            <h4 class='product-price header-cart-item-info'>$pro_price $</h4>
                                        </div>
                                        <a href='#' class='btn'>Dodaj u košaricu</a>
                                    </div> 

                            ";
                        }
                    }
                ?>
                <br><br>  
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
</body>


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
<html>