<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
        // Tabuada
        echo "<h1>Escreva a Tabuada do 8</h1>";
        $num = 8;
        for($i=0;$i<=10;$i++){
          $r = $i* $num;    
          echo "$i X $num = $r <br>";
        }
        ?>
</body>
</html>