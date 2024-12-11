<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP für WordPress</title>
</head>

<body>
  <?php
  $farben = array(
    'rot' => '#FF0000',
    'grün' => '#00FF00',
    'blau' => '#0000FF',
  );
  $farben['schwarz'] = '#000000';

  print_r($farben);
  echo '<br><br>';
  foreach ($farben as $k => $v) {
    echo "Schlüssel: $k, Wert: $v<br />\n";
  }
  ?>
</body>

</html>