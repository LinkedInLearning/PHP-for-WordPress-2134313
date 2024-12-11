<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP für WordPress</title>
</head>
<body>
<?php
$antworten = array('nie', 'manchmal', 'oft', 42);
//$antworten = ['nie', 'manchmal', 'oft', 42];
$antworten[] = 'aus Prinzip nicht';

//echo $antworten[2];
//print_r($antworten);

foreach ($antworten as $aw) {
  echo "$aw<br>";
}


?>
</body>
</html>
