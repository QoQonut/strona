<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sweetcheats</title>
  <link rel="icon" href="http://www.iconshock.com/img_vista/FLAT/food/jpg/muffin_icon.jpg">
  <link href="./css/bootstrap.css" rel="stylesheet">
  
</head>

<body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>


  <?php
$mysql_host = 'mysql.staszic.waw.pl'; //lub jakiś adres: np sql.nazwa_bazy.nazwa.pl
$port = '3306'; //domyślnie jest to port 3306
$username = 'k15c00';
$password = 'weluvR@nger111';
$database = 'k15c00'; //'produkty'




    try{
        $pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
        $wynik = $pdo->query('SELECT * from ksiega;');
        echo '<table class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>id</th>
        <th>nazwa</th>
        <th>link</th>
        <th>zdjecie</th>
        <th>data</th>        
        <th>czas</th>
        <th>suma_ocen</th>
        <th>liczba_ocen</th>
        <th>trudnosc</th>
        <th>babeczki</th>
        <th>bez_pieczenia</th>
        <th>brownie</th>
        <th>przekladane</th>
        <th>serniki</th>
        <th>tarty</th>
        <th>z owocami</th>
        <th>boze_narodzenie</th>
        <th>chrzciny</th>
        <th>urodziny</th>
        <th>walentynki</th>
        <th>wielkanoc</th>
        <th>bez cukru</th>
        <th>bez glutenu</th>
        <th>bez jaj</th>
        <th>bez laktozy</th>
        <th>weganskie</th>
        </tr>
        </thead>
        <tbody>
        ';
        foreach($wynik as $wiersz)
        {
            echo '<tr>
            <td>'.$wiersz['id'].'</td>'.
            '<td>'.$wiersz['nazwa'].'</td>'.
            '<td>'.$wiersz['link'].'</td>'.
            '<td>'.$wiersz['zdjecie'].'</td>'.
            '<td>'.$wiersz['data'].'</td>'.
            '<td>'.$wiersz['czas'].'</td>'.
            '<td>'.$wiersz['suma_ocen'].'</td>'.
            '<td>'.$wiersz['liczba_ocen'].'</td>'.
            '<td>'.$wiersz['trudnosc'].'</td>'.
            '<td>'.$wiersz['babeczki'].'</td>'.
            '<td>'.$wiersz['bez_pieczenia'].'</td>'.
            '<td>'.$wiersz['brownie'].'</td>'.
            '<td>'.$wiersz['przekladane'].'</td>'.
            '<td>'.$wiersz['serniki'].'</td>'.
            '<td>'.$wiersz['tarty'].'</td>'.
            '<td>'.$wiersz['z_owocami'].'</td>'.
            '<td>'.$wiersz['boze_narodzenie'].'</td>'.
            '<td>'.$wiersz['chrzciny'].'</td>'.
            '<td>'.$wiersz['urodziny'].'</td>'.
            '<td>'.$wiersz['walentynki'].'</td>'.
            '<td>'.$wiersz['wielkanoc'].'</td>'.
            '<td>'.$wiersz['bez_cukru'].'</td>'.
            '<td>'.$wiersz['bez_glutenu'].'</td>'.
            '<td>'.$wiersz['bez_jaj'].'</td>'.
            '<td>'.$wiersz['bez_laktozy'].'</td>'.
            '<td>'.$wiersz['weganskie'].'</td>
            </tr>';
        };
        echo '</tbody></table>';
    }
    catch(PDOException $e){
        echo 'Połączenie nie mogło zostać utworzone.<br />';
    }


?>

</body>

</html>
