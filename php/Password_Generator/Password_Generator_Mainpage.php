<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator Mainpage</title>
    <style type = "text/css">
        html
        {
            min-height: 100%;
        }
        body 
        {
            background-color: #98F5FF;
	        background-repeat: no-repeat;
            min-height: 100%;
	      
            
        }
        .btn1 {
            width: 20%;
          background-color: rgb(76, 91, 175);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
        .btn1:hover {
            background-color: #4577a0;

}
    
    </style>
</head>
<body>
    <?php
        echo"<h1>Willkommen zum Passwort Generator.</h1>";
        echo"<h3>Hier können Sie eine Passwortkarte für ein sicheres Passwort generieren lassen.</h3>";
        echo'<h3>Klicken Sie auf den "Passwortkarte generieren" Knopf um eine Karte generieren zu lassen.</h3>'
    ?>    
        <form action="Password_Generator_Cardpage.php" method="post">
            <!-- Platz für Koordinatensystem Längenauswahl -->
        <input type="submit" name="submit" value="Passwortkarte generieren" class="btn1">
        
</body>
</html>