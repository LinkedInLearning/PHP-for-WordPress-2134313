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
if ($i > 4):
  echo "$i ist größer als 4";
elseif ($i == 4):
  echo "$i gleich 4";
else:
  echo "$i ist kleiner als 4";
endif;
?>
</body>
</html>
