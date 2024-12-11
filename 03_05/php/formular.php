<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP für WordPress</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="vorname">Vorname:</label>
<input type="text" name="vorname" id="vorname">
<br>
<label for="nachname">Nachname:</label> <br >
<input type="text" name="nachname" id="nachname">
<br>
<input type="submit" value="Abschicken">
</form>
<?php
if (isset($_POST["vorname"])) {
  echo "Ihre Eingaben<br>\n"
    . "Vorname: " . htmlspecialchars($_POST["vorname"])
    . ", Name: " .htmlspecialchars($_POST["nachname"]) 
    . "<br>\n";
}

?>


</body>
</html>

