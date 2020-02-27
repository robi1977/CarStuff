<?php
    $iloscopon=$_POST["iloscopon"];
    $iloscoleju=$_POST["iloscoleju"];
    $iloscswiec=$_POST["iloscswiec"];
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/processorder.css" />
    <title>Wyniki zamówienia</title>
  </head>
  <body>
    <h1>Części samochodowe - wyniki zamówienia</h1>

    <?php
        echo '<p>Zamówienie przyjęte o: </p>'. date("Y-m-d H:i");
        echo '<hr/>';
        echo '<table class="order"><thead><tr><th>Co?</th><th>Ilość:</th></tr></thead>';
        echo '<tbody>';
        echo '<tr><td>Opon:</td><td>'.$iloscopon.'</td></tr>';
        echo '<tr><td>Olej:</td><td>'.$iloscoleju.'</td></tr>';
        echo '<tr><td>Świec:</td><td>'.$iloscswiec.'</td></tr>';
        echo '</tbody></table>';
    ?>

  </body>
</html>