<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sweetcheats</title>
  <link rel="icon" href="http://www.iconshock.com/img_vista/FLAT/food/jpg/muffin_icon.jpg">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  



  <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */

        .row.content {
            height: 1200px
        }
        /* Set gray background color and 100% height */

        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        /* Set black background color, white text and some padding */

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <?php
$mysql_host = 'mysql.staszic.waw.pl';
$port = '3306';
$username = 'k15c00';
$password = 'weluvR@nger111';
$database = 'k15c00';
$nazwa = strip_tags($_POST['nazwa']);
$link = strip_tags($_POST['link']);
$trudnosc = $_POST['trudnosc'];
$czas = $_POST['dni']*24*60+$_POST['godziny']*60+$_POST['minuty'];
$data = date("Y-m-d");

$babeczki = $_POST['babeczki'];
$bez_pieczenia = $_POST['bez_pieczenia'];
$brownie = $_POST['brownie'];
$przekladane = $_POST['przekladane'];
$tarty = $_POST['tarty'];
$serniki = $_POST['serniki'];
$z_owocami = $_POST['z_owocami'];

$zdjecie = "0";
if($babeczki == '1'){
    $zdjecie = 'babeczka.jpg';
}
if($brownie == '1'){
    $zdjecie = 'brownie.jpg';
}
if($tarty == '1'){
    $zdjecie = 'tarta.jpg';
}
if($serniki == '1'){
    $zdjecie = 'sernik.jpg';
}
if($zdjecie == '0'){
    $zdjecie = 'example.jpg';
}

$boze_narodzenie = $_POST['boze_narodzenie'];
$chrzciny = $_POST['chrzciny'];
$urodziny = $_POST['urodziny'];
$walentynki = $_POST['walentynki'];
$wielkanoc = $_POST['wielkanoc'];

$bez_cukru = $_POST['bez_cukru'];
$bez_glutenu = $_POST['bez_glutenu'];
$bez_jaj = $_POST['bez_jaj'];
$bez_laktozy = $_POST['bez_laktozy'];
$weganskie = $_POST['weganskie'];


    try{
        $pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
        $wstaw = $pdo->prepare('INSERT INTO ksiega (nazwa, link, data, czas, zdjecie, trudnosc, babeczki, bez_pieczenia, brownie, przekladane, serniki, tarty, z_owocami, boze_narodzenie, chrzciny, urodziny, walentynki, wielkanoc, bez_cukru, bez_glutenu, bez_jaj, bez_laktozy, weganskie)
        VALUES(:nazwa, :link, :data, :czas, :zdjecie, :trudnosc, :babeczki, :bez_pieczenia, :brownie, :przekladane, :serniki, :tarty, :z_owocami, :boze_narodzenie, :chrzciny, :urodziny, :walentynki, :wielkanoc, :bez_cukru, :bez_glutenu, :bez_jaj, :bez_laktozy, :weganskie)');
        $wstaw->execute(array(
                "nazwa" => $nazwa,
                "link" => $link,
                "data" => $data,
                "czas" => $czas,
                "zdjecie" => $zdjecie,
                "trudnosc" => $trudnosc,
                "babeczki" => $babeczki,
                "bez_pieczenia" => $bez_pieczenia,
                "brownie" => $brownie,
                "przekladane" => $przekladane,
                "serniki" => $serniki,
                "tarty" => $tarty,
                "z_owocami" => $z_owocami,
                "boze_narodzenie" => $boze_narodzenie,
                "chrzciny" => $chrzciny,
                "urodziny" => $urodziny,
                "walentynki" => $walentynki,
                "wielkanoc" => $wielkanoc,
                "bez_cukru" => $bez_cukru,
                "bez_glutenu" => $bez_glutenu,
                "bez_jaj" => $bez_jaj,
                "bez_laktozy" => $bez_laktozy,
                "weganskie" => $weganskie
                ));
        ?>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h3>Menu</h3>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorie
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="bebeczki.html">babeczki</a></li>
                            <li><a href="bez_pieczenia.html">bez pieczenia</a></li>
                            <li><a href="brownie.html">brownie</a></li>
                            <li><a href="przekladane.html">przekładane</a></li>
                            <li><a href="serniki.html">serniki</a></li>
                            <li><a href="tarty.html">tarty</a></li>
                            <li><a href="z_owocami.html">z owocami</a></li>
                        </ul>
                    </li>
                    <li><a href="input.html">Dodaj swój przepis</a></li>
                </ul>
                </div>

            <div class="col-sm-9" style="padding: 60px">
                <h2>Twój przepis został dodany.</h2>

            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <p>Stopcia</p>
    </footer>


       <?php 
    }
    catch(PDOException $e){
        echo 'Połączenie nie mogło zostać utworzone.<br />';
    }


?>

</body>

</html>
