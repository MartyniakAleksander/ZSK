<?php
echo "<pre>";

echo print_r($_POST);

echo "</pre>";

if (!empty($_POST['name']) && !empty($_POST['figura']))
{
  switch ($_POST['figura']) {
    case 'kwadrat':
    echo " kwadrat";
    header('location: ./square.php');
      break;

      case 'prostokat':
        echo 'prostokat';
        header('location: ./rectangle.php');
        break;
  }
 echo "Wypełniłeś imie";
}
else {

}
 ?>
