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
<h1>Programa Bom Dia</h1>
<label for="fname">Nome:</label><br><br>
<input type="text" id="nome" name="nome" value=""><br><br>
<input type="submit" value="Enviar">
</form>
<?php
        echo "<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            echo "Bom dia $nome!";
        }
        ?>
</body>
</html>