<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP für WordPress</title>
</head>
<body>
<?php
class Kunde 
{
  public $name;
  protected $speicherGesamt = 50;
  protected $speicherVerbraucht;

  public function __construct($name, $speicherVerbraucht=0) 
  {
    $this->name=$name;
    $this->speicherVerbraucht = $speicherVerbraucht;
  }

  public function halloSagen()
  {
   echo "Hallo {$this->name}";
  }

  public function speichern($speicherBedarf) 
  {
    if (($this->speicherGesamt - $this->speicherVerbraucht) 
        >= $speicherBedarf) {
       $this->speicherVerbraucht= 
        $this->speicherVerbraucht+$speicherBedarf;
       echo "$speicherBedarf gespeichert";
     } else {
       echo "$speicherBedarf nicht gespeichert. Nicht genügend Speicher mehr frei.";
     }
  }
  public function speicherFreigeben($speicher) 
  {
    $this->speicherVerbraucht= $this->speicherVerbraucht - 
    $speicher;
    echo "$speicher Speicher frei gegeben";
  }
  public function zustandAusgeben() 
  {
   $speicherFrei = $this->speicherGesamt - 
   $this->speicherVerbraucht;
    echo "<p>Derzeit sind {$this->speicherVerbraucht} Speicher verbraucht<br />";
    echo "Es sind damit noch $speicherFrei frei</p>\n";  
  }
}
class Premiumkunde extends Kunde
{
  protected $speicherGesamt= 100;
  public $farbSchema;
  public function __construct($name, $speicherVerbraucht = 0, $farbSchema = "Sonnenaufgang") 
  {
    $this->name = $name;
    $this->speicherVerbraucht = $speicherVerbraucht;
    $this->farbSchema = $farbSchema;
  }
}
$neuerKunde = new Kunde ("Anja");
$neuerKunde->halloSagen();
$neuerKunde->zustandAusgeben();
$neuerKunde->speichern(20);
$neuerKunde->zustandAusgeben();
$neuerKunde->speichern(40);
$neuerKunde->zustandAusgeben();
$neuerKunde->speicherFreigeben(20);
$neuerKunde->zustandAusgeben();
$neuerKunde->speichern(40);
$neuerKunde->zustandAusgeben();

$kunde3 = new Premiumkunde ("Julian", 20, "Wüstenstimmung");
$kunde3->halloSagen();
echo "<br>Das gewählte Farbschema ist: {$kunde3->farbSchema}<br />";
$kunde3 ->zustandAusgeben();
$kunde3 ->speichern(20);
$kunde3 ->zustandAusgeben();

?>

</body>
</html>