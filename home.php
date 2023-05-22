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
<script>
// Get the modal and button elements
var modal = document.getElementById("product-modal");
var btn = document.getElementById("product-modal-btn");

// When the button is clicked, display the modal and populate the content with product information
btn.onclick = function() {
  modal.style.display = "block";
  // Get the product information from the server using AJAX
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Parse the JSON response from the server
      var product = JSON.parse(this.responseText);
      // Populate the modal content with the product information
      document.getElementById("product-image").src = product.image;
      document.getElementById("product-name").innerHTML = product.name;
      document.getElementById("product-description").innerHTML = product.description;
      document.getElementById("product-price").innerHTML = "Price: " + product.price;
    }
  };
  xhttp.open("GET", "get_product_info.php", true);
  xhttp.send();
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
</script>





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


<div class="row">
    <div class="col-2">
        <h1>Postani dio Pet Kluba!</h1>
        <p>Učlani se u Pet Klub i ostvari bodove koji ti donose popuste.</p>
        <a href="product.php" class="btn">Posebne ponude &#8594;</a>
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




<?php

$sql = "SELECT Naziv, Id, Cijena, Image FROM proizvodi";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $pro_title = $row['Naziv'];
                        $pro_price = $row['Cijena'];
                        $pro_id = $row['Id'];
                        $pro_image = $row['Image'];
                        echo "
                        <div class='col-md-4'>
                                 <div class='panel panel-info'>
                                        <div class='panel-heading'>$pro_title</div>
                                        <div class='panel-body'>
                                            <img src='slikice/$pro_image' style='width:160px; height:250px;'/>
                                        </div>
                                        <div class='panel-heading'> $pro_price.00
                                            <button pid='$pro_id'  id='product-modal-btn' class='btn btn-danger btn-xs'>Detalji</button>
                                        </div>
                                    </div>
                                </div>    
                    ";
                    }
                    echo "</table>";
                } else {
                echo "0 results";
                }
                mysqli_close($conn);

?>
<!-- Modal container -->
<div id="product-modal" style="display: none;">
  <!-- Modal content -->
  <div id="product-modal-content">
    <img id="product-image" src="">
    <h2 id="product-name"></h2>
    <p id="product-description"></p>
    <p id="product-price"></p>
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