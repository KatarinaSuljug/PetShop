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
            <li><a href="homeAdmin.php">Naslovna</a></li>
            <li><a href="onama.php">O nama</a></li>
            <li><a href="unosispis.php">Ispis</a><li>
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
        <style>
            table, th, td {
                border: 1px solid #ddd;
                padding: 8px;
            }
            table {
                width: 70%;
                border-collapse: collapse;
                font-size: 20px;
                padding-left: 20px;
                
            }
            table th{
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: left;
                background-color: brown;
                color: white;
            }    
        </style>
    </head>

  

      
      <div>

        <?php
            include "spoj.php";
            if(!empty($_SESSION['prijavljen']) && $_SESSION['prijavljen'] == true){
                    if($_SESSION['uloga'] == 'Admin'){
                        echo "<br><p style='font-size:20px'>" ."Ispis dodanih proizvoda: ". "</p>";
                    }    
                        else{
                        echo "Prijavljeni ste kao kupac.";            
                    }                
            } else{
                header("Location: login.php");
                }
                $sql = "SELECT Naziv, Id, Cijena FROM proizvodi";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    echo "<table><tr><th> Naziv </th><th> Id </th><th> Cijena </th><th>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  "<tr> ";
                        echo "<tr><td>" .$row['Naziv']. "</td><td>" .$row['Id']. "</td><td>" .$row['Cijena']. "</td><td>"  ."<a href='delete.php?delete_id=".$row['Id']."'>Obrisi</a>"."</td></tr>";
                        echo "</tr> ";
                    }
                    echo "</table>";
                } else {
                echo "0 results";
                }
                mysqli_close($conn);

            ?>
      </div>
    </body>
</html>




