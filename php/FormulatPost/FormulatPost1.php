<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<html>
<body>
<?php
if(!isset($_POST["vorname"])){
    echo "vorname";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["nachname"])){
    echo "nachname";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["wohnort"])){
    echo "wohnort";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Eeinfamilienhaus"])){
    echo "Eeinfamilienhaus";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Eigentumshaus"])){
    echo "Eigentumshaus";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Mehrfamilienhaus"])){
    echo "Mehrfamilienhaus";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Dokumentation"])){
    echo "Dokumentation";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Nachrichten"])){
    echo "Nachrichten";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Spielfilme"])){
    echo "Spielfilme";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["sport"])){
    echo "Mehrsportfamilienhaus";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["komenttar"])){
    echo "komenttar";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Daten speichern"])){
    echo "Daten speichern";
}else{ "Bitte fülen sie das Feld";
}

if(!isset($_POST["Zurücksetzen"])){
    echo "Zurücksetzen";
}else{ "Bitte fülen sie das Feld";
}

    vorname: <?php echo $_POST["vorname"]; ?><br>
    nachname: <?php echo $_POST["nachname"]; ?><br>
    wohnort: <?php echo $_POST["wohnort"]; ?><br>
    Eeinfamilienhaus: <?php echo $_POST["Eeinfamilienhaus"]; ?><br>
    username: <?php echo $_POST["Eigentumshaus"]; ?><br>
    Mehrfamilienhaus: <?php echo $_POST["Mehrfamilienhaus"]; ?><br>
    Dokumentation: <?php echo $_POST["Dokumentation"]; ?><br>
    Nachrichten: <?php echo $_POST["Nachrichten"]; ?><br>
    Spielfilme: <?php echo $_POST["Spielfilme"]; ?><br>
    Sport: <?php echo $_POST["sport"]; ?><br>
    komenttar: <?php echo $_POST["komenttar"]; ?><br>
    submit: <?php echo $_POST["Daten speichern"]; ?><br>
    reset: <?php echo $_POST["Zurücksetzen"]; ?>
   
    
    ?>
</body>
</html>
</body>
</html>