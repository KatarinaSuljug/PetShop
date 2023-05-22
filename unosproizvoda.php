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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>UNOS</title>
</head>
<section id="otkup_unos" class="section-p1">
        <form action="" method="post">
            <span>Unesite podatke</span>
            <input type="text" name="Naziv" id="Naziv" placeholder="Naziv">
            <input type="int" name="Id" id="Id" placeholder="Id">
            <input type="int" name="Cijena" id="Cijena" placeholder="Cijena">
            <input type="file" name="Image" id="Image" placeholder="Fotografija">

            <button class="send_normal" id="otkupise">Pošalji</button><br><br>
        </form>
      </section>
</html>
<?php 
        require_once "spoj.php";

        if(isset($_POST['Id'])){
            unset($error);

            $sql = 'SELECT * FROM proizvodi WHERE Id = "'.$Id.'"';
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                $error = "Id zauzet!<br>";
            }
            else{   
                $Naziv = $_POST['Naziv'];
                $Id = $_POST['Id'];
                $Cijena = $_POST['Cijena'];
                $Image = $_POST['Image'];
                    
                $sql = "INSERT INTO proizvodi (Naziv,Id,Cijena,Image) VALUES('$Naziv','$Id','$Cijena','$Image')";
                if ($conn->query($sql)){
                    header("location: unosproizvoda.php");
                }
                else {
                    echo "Error: " . $sql . ": -" . mysqli_error($conn);
                }
                mysqli_close($conn);
                echo "<h2>Vaši su podaci uspješno poslani</h2>";
            }
        }
        ?>

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