<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="Width-device-width, initial-scale=1.0">
        <title>Registracija</title>
        <link rel="stylesheet" href="styleUpIn.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <?php 
        require_once "spoj.php";

        if(!empty($_POST['username'])){
            unset($error);

            $sql = 'SELECT * FROM korisnici WHERE K_ime = "'.$_POST['username'].'"';
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                $error = "Korisničko ime zauzeto!<br>";
            }
            else{
                $ime = $_POST['ime'];
                $prezime = $_POST['prezime'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                    
                $sql = "INSERT INTO korisnici (Ime,Prezime,Email,K_ime,Lozinka,Uloga) VALUES('$ime','$prezime','$email','$username','$password','korisnik')";
                if (mysqli_query($conn, $sql)){
                    header("location: index.php");
                }
                else {
                    echo "Error: " . $sql . ": -" . mysqli_error($conn);
                }
                mysqli_close($conn);
                
            }
        }
    ?>

    <body>
        <form action="" style="border:1px solid #ccc" method="post">
            <div id="registr" class="container">
              <h2>Registracija</h2>
              <p>Ispunite ovu formu za stvaranje svog korisničkog računa.</p>
        
              <hr>
              <label for="ime"><b>Ime</b></label>
              <input type="text" name="ime" id="ime" placeholder= "Unesite ime"><br>
              
              <label for="prezime"><b>Prezime</b></label>
              <input type="text" name="prezime" id="prezime" placeholder= "Unesite prezime"><br>
              
              <label for="email"><b>E-mail</b></label>
              <input type="text" name="email" id="email" placeholder= "Unesite email"><br>

              <label for="username"><b>Korisničko ime</b></label>
              <input type="text" name="username" id="username" placeholder= "Unesite korisničko ime"><br>
              
              <label for="password"><b>Lozinka</b></label>
              <input type="password" name="password" id="password" placeholder= "Unesite lozinku"><br>
          
              <button type="submit" class="goinbutton" onclick="provjeri()">Registriraj</button>

            </div>

            <div class="container login">
              <p>Već imate svoj račun? <a href="login.php">Prijava</a>.</p>
            </div>
        </form>

        <script>
         function provjeri() {
            let ime = document.getElementById("ime").value;
            let imeL = ime.length;
            let prezime = document.getElementById("prezime").value;
            let prezimeL = prezime.length;
            let username = document.getElementById("username").value;
            let usernameL = username.length;
            let password = document.getElementById("password").value;
            let passwordL = password.length;
            let emailad = document.getElementById("email").value;
            let pozicijaA = emailad.indexOf("@");
            let pozicijatocke = emailad.lastIndexOf(".");
            let emaillen = emailad.length - 1;
            if (imeL == "" || prezimeL == "" || usernameL == ""  || passwordL == "") {
                alert("Nisu unešeni svi potrebni podaci!")
                return false;
            }else if (pozicijaA < 2 || (pozicijatocke - pozicijaA) < 2 || (emaillen - pozicijatocke) < 2) {
                alert("Email format nije valjan.")
                return false;
            }
        }
    </script>
    </body>
</html>    