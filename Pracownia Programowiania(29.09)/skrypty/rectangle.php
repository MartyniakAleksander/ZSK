<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokat</title>
  </head>
  <body>
    <h3>Prostokat</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
        <input type="text" name="sideB" placeholder="Podaj bok B"><br><br>
        <input type="submit" value="oblicz">
      </form>
      <?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
        $sideA = str_replace(',','.',$_GET['sideA']);
        $sideB = str_replace(',','.',$_GET['sideB']);
        $area= $sideB*$sideA;

        $circuit=2*$sideA+2*$sideB;

        echo <<<RESULT
        <hr>
        Pole Prostokatu wynosi : $area cm<sup>2</sup><br>
        Obwod Prostokatu wynosi: $circuit cm <br>

        RESULT;

      }
      else {
        echo "Wypelnij bok A lub B";
      }


       ?>
  </body>
</html>
