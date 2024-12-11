<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP für WordPress</title>
</head>
<body>
<?php

function ausgabe() {
  echo "Hallo München";
}

ausgabe();

echo "<br>\n";
 
function ausgabe2() {
  return "Hallo München";
}

$c = ausgabe2();
echo mb_strtoupper($c);

echo "<br>\n";

function brutto($netto) 
{
  return $netto * 1.19;
}
$betrag = 25;
$bruttowert = brutto($betrag);
echo "$betrag ergibt $bruttowert inkl. MWSt<br>\n";



?>
</body>
</html>