<?php
require_once "spoj.php";
session_start();
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    header("location: search.php?search_id=$search");
}
if ($_SESSION['ime'] == NULL) {
    echo 'neispravna sesija';
    header("location:login.php");
}
if ($_SESSION['uloga'] == 'korisnik' || $_SESSION['uloga'] == 'admin') {
    $ime = $_SESSION['ime'];
    $prezime = $_SESSION['prezime'];
    //dodatak
} else {
    header("location:login.php");
}
$update_id = $_GET['update_id'];
if (isset($_POST)) {
    if (isset($_POST['kontakt'])) {
        $conn = new DatabaseConnection;
        $conn->connect();
        $tip = $_POST['tip'];
        $naziv = $_POST['naziv'];
        $opis = $_POST['opis'];
        $cijena = $_POST['cijena'];
        $kontakt = $_POST['kontakt'];
        $id = $_SESSION['id'];
        $sql = "UPDATE bicikli SET tip = '$tip', naziv = '$naziv', opis = '$opis', cijena = '$cijena', kontakt = '$kontakt' WHERE naziv = '{$update_id}'"; // salje se isto kao delete_id 
        if ($conn->query($sql)) {
            header("location: moji_oglasi.php");
        } else {
            echo "Error: " . $sql . ": -" . $conn->error();
        }
        $conn->close();
        echo "<h2>Unos uspiješan</h2>";
    }
}

?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="webstyle.css">
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <title>Predaj oglas</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">Naslovna</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0" style="padding-right:10px;">
                    <input class="form-control mr-sm-2" style="width:250px;" type="search"
                        placeholder="Unesite pojam za pretragu" aria-label="Unesi pojam">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
                </form>
                <div>
                    <form class="form-inline my-2 my-lg-0" action="predaj_oglas.php">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Predaj oglas</button>
                    </form>
                </div>
            </div>
            <div>
                <form>
                    <a class="nav-link" href="moji_oglasi.php">Moji oglasi<span class="sr-only">(current)</span></a>
                </form>
            </div>
            <div>
                <form>
                    <a class="nav-link" href="odjava.php">Odjava<span class="sr-only">(current)</span></a>
                </form>
            </div>
        </nav>
    </header>
    <div class="content container">
        <div class="col-md-12">
            <div class="jumbotron fluid-jumbotron">
                <div class="container">
                    <form method="post">
                        <label class="form-label" for="tip">Odaberite tip bicikla</label>
                        <select id="tip" for="tip" name="tip" required>
                            <option disabled selected></option>
                            <option value="MTB">MTB</option>
                            <option value="dječji">Dječji</option>
                            <option value="električni">Električni</option>
                            <option value="gradski">Gradski</option>
                            <option value="cestovni">Cestovni</option>
                        </select><br>
                        <label class="form-label" for="naziv">Unesite naziv oglasa</label>
                        <input class="form-control" type="text" name="naziv" id="naziv" required><br>

                        <label class="form-label" for="opis">Unesite opis oglasa</label>
                        <textarea class="form-control" style="height:10em;" type="textarea" name="opis"
                            id="opis" required></textarea><br>

                        <label class="form-label" for="cijena">Unesite cijenu ($)</label>
                        <input class="form-control" style="width:15%;" type="text" name="cijena" id="cijena" required>

                        <label class="form-label" for="kontakt">Unesite kontakt broj</label>
                        <input class="form-control" style="width:15%;" placeholder="0915557777" type="text"
                            name="kontakt" id="kontakt" required><br>
                        <input class="btn btn-info" type="submit" value="Objavi oglas!">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>

