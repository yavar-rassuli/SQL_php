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
            background-color: lightblue;
	        background-repeat: no-repeat;
            min-height: 100%;
	      
            
        }

        table
        {
            text-align:center;
            border: 5px black solid;
            border-collapse: collapse;
        }

        td 
        {
            border: 1px black solid;
        }

        th 
        {
            background-color : lightgreen;
            border: 1px black solid;
        }
        
    
    </style>
</head>
<body>
    <?php
       echo"<h1>Dies ist deine Passwortkarte</h1>";
       $Alphabet = array();
       $Anzahl = 'Z';
       for($i='A';$i<=$Anzahl;$i++)
       {
            $Alphabet[]=$i;
            if($i=='Z')
            {break;}
       }
       $Numbers = array();
       $Limit = 25;
       for($i=1;$i<=$Limit;$i++)
       {
           $Numbers[]=$i;

       }

       $Code = array();
       for($i=48;$i<=122;$i++)
       {
           $Code[]=$i;
       }
    
      // print_r($code);
       
       echo "<table width='50%', border='1'>";
       echo "<tr><th></th>";
       for($i=0;$i<=25;$i++)
       {
           echo "<th>$Alphabet[$i]</th>";//Generiert X_Achse
       }
       echo "<tr>";
       
       for($i=0;$i<$Limit;$i++)
       {
           ?>
           <tr style= "background-color: lightgreen">
           <?php
           echo "<td><b>$Numbers[$i]</b></td>"; //Generiert Y_Achse
           for ($j=0;$j<=$Limit;$j++)
           {
               $Zufall = random_int(0,74);
              
               $asci = chr($Code[$Zufall]);
               ?>
                <td style = "background-color : #66CDAA">
                <?php
               echo "$asci</td>"; //Generiert Tabele Inhalt 
           }
           echo "</tr>";
       }
       echo "<tr>";
       ?>

        <td style = "background-color : lightgreen"></td>
       <?php
       for($i=0;$i<=25;$i++)
       {
           ?>
            <td style = "background-color : lightgreen">
            <?php
           echo "<b>$Alphabet[$i]</b></td>"; //Generiert X_Achse Untere Tabele
       }
       echo "<tr>";
        echo "</table>";
        
    ?>
    
</body>
</html>