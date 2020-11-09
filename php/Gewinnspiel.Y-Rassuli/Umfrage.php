<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        if(empty($_POST["name"]) ||
        empty($_POST["Strasse"]) ||
        empty($_POST["PLZundOrt"]) ||
        empty($_POST["Internetangebot"]) ||
        empty($_POST["Information"]) ||
        empty($_POST["Bestellsystem"]))
        {
            echo "Bitte füllen Sie ganzes Formular aus";
        }else
        {
        if(isset($_POST["Absenden"])){
        echo "Vor und Nachname: " . $_POST["name"] . "<br>";
        echo "Strasse: " . $_POST["Strasse"] . "<br>";
        echo "PLZ und ORT: " . $_POST["PLZundOrt"] . "<br><br>";
        echo "Internetangebot: " . $_POST["Internetangebot"] . "<br><br>";
        echo "Informations: " . $_POST["Information"] . "<br><br>";
        echo "Bestellsystem: " . $_POST["Bestellsystem"] . "<br><br>";
        echo "komenttar: " . $_POST["komenttar"] . "<br><br>";

    $datei_handling = fopen("Umfrage_daten.csv", "a");
    if($datei_handling == FALSE)
    {
      echo "<p>Die Daten Können nicht geofnet werden!</p>";
      die("<p>Programm ist beendet!</p>");
    }
    $name = $_POST["name"];
    $Strasse = $_POST["Strasse"];
    $PLZundOrt = $_POST["PLZundOrt"];
    $Internetangebot = $_POST["Internetangebot"];
    $Information = $_POST["Information"];
    $Bestellsystem = $_POST["Bestellsystem"];
    if(empty($_POST["komenttar"])){
      $komenttar = "keine komenttar!";
    }else
     {
      $komenttar = $_POST["komenttar"];
    }
    if (fwrite($datei_handling, utf8_decode("$name;$Strasse;$PLZundOrt;$Internetangebot;$Information;$Bestellsystem;$komenttar;\n"))) {
      echo $name . "<br>" . $Strasse . "<br>" . $PLZundOrt . "<br>" . $Internetangebot . "<br>" . $Information . "<br>" . $Bestellsystem . "<br>" . $komenttar;
      echo "<p> Diese Informationen wurden gespeichert!</p>";
    }
    else {
      "Fehlermeldung!";
    }
    fclose($datei_handling);
  }
}







     ?>

  </body>
</html>
