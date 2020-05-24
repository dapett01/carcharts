<?php
              //Detta är koden så att vi igenom koden skulle kunna ta bort användare iställer för att behöva gå in på PHPmyAdmin och radera därifrån

              //Koden precis under, ger information till koden, vilken server och vilken tabell den ska tabort informationen från
$servername = "localhost";
$username = "j";
$password = "j";
$dbname = "carcharts";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              //Här välger man vilken tabell och vilken användare man vill ta bort. Eftersom vi använder "user_id" som en primary behöver man bara välja den för att ta bort allt.
  $sql = "DELETE FROM login WHERE user_id=4";

  $conn->exec($sql);
    echo "Record deleted successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
