<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP für WordPress</title>
</head>
<?php
class Kunde 
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
  public function halloSagen()
  {
    echo "Hallo " . $this->name;
  }
 public static function halloSagenStatisch()
  {
    echo "Hallo";
  }
}
$neuerKunde = new Kunde('Anna');
$neuerKunde->halloSagen();
// echo " ";
// echo $neuerKunde->name;
echo " ";
Kunde::halloSagenStatisch();

?>


</body>
</html>

