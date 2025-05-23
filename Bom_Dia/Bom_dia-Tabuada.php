<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
<head>
<meta charset="UTF-8">
<title>Senac RS</title>
</head>
<body>
<form method="post">
<h1>Tabuada</h1>
<label for="fname">Número:</label><br><br>
<input type="text" id="numero" name="numero" value=""><br><br>
<input type="submit" value="Enviar">
</form>
<?php
        // Tabuada
        echo "<h1>Escreva a Tabuada do 8</h1>";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["numero"];
          for($i=0;$i<=10;$i++){
          $r = $i* $num;    
          echo "$i X $num = $r <br>";
        }  
        }
        ?>
</body>
</html>