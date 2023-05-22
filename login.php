<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="Width-device-width, initial-scale=1.0">
        <title>Prijava</title>
        <link rel="stylesheet" href="styleUpIn.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
        <div>
            <?php 
            include "spoj.php";
            $msg='';
            if (isset($_POST['prijavise']) && !empty($_POST['username']) && !empty($_POST['password'])){
                $sql="SELECT * FROM korisnici";
                $q=mysqli_query($conn,$sql);
            

                while ($redak = mysqli_fetch_array($q,MYSQLI_ASSOC)){
                    if(($_POST)['username'] == $redak["K_ime"] && $_POST['password'] == $redak['Lozinka']){
                        $_SESSION['prijavljen'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['ime'] = $redak['Ime'];
                        $_SESSION['prezime'] = $redak['Prezime'];
                        $_SESSION['uloga'] =$redak['Uloga'];
                        if($redak['Uloga'] == "Admin")
                            header("Location: homeAdmin.php");
                        else if($redak['Uloga'] == "korisnik"){
                            header("Location: home.php");
                        }
                    }else{
                        $msg = 'Krivo korisničko ime ili lozinka!';
                    }
                }
            }
            ?>
        </div>
        <form action="" method="post">
            <div id="log" class="container">
              <h2>Prijava</h2><br>  
              <label for="username"><b>Korisničko ime</b></label>
              <input type="text" placeholder="Unesite korisničko ime" name="username" required>
    
              <label for="password"><b>Lozinka</b></label>
              <input type="password" placeholder="Unesite lozinku" name="password" required>
                    
              <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Zapamti me
              </label>
          
              <button type="submit" class="goinbutton" name="prijavise">Prijava</button>

              <h4><?php echo $msg; ?></h4>
            </div>
        </form>
    </body>
</html>