<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
        <input type="submit" value="oblicz">
      </form>
      <?php
      if (!empty($_GET['sideA'])) {
        echo $_GET['sideA'];
        $sideA = str_replace(',','.',$_GET['sideA']);
        $area= pow($sideA,2);

        $circuit=4*$sideA;

        echo <<<RESULT
        <hr>
        Pole Kwadratu wynosi : $area cm<sup>2</sup><br>
        Obwod kwadratu wynosi: $circuit cm <br>

        RESULT;

      }
      else {
        echo "Wypelnij bok A";
      }


       ?>
  </body>
</html>
