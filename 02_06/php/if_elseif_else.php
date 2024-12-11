<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP für WordPress</title>
</head>

<body>
<?php
$i = 3;
if ($i > 4) {
  echo "$i ist größer als 4";
  /* hier können weitere Anweisungen folgen */
} elseif (4 == $i) {
  echo "$i gleich 4";
} else {
  echo "$i ist kleiner als 4";
  /* weitere Anweisungen bei Bedarf */
}
?>
</body>
</html>
