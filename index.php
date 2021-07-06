<body bgcolor="#D2EBF7">
   <?php
   if (!isset($_POST["control"])){
       ?>
    
    <h3>Calculo del area de un triangulo</h3>
    <form method="post" action="index.php">
        <input type="hidden" name="control" value="12345">
        Base: <input type="text" name="base"><br>
        Altura: <input type="text" name="altura"><br>
        <input type="submit" value="Enviar">
    </form>
   <?php
   }
 else {
     $base= $_POST["base"];
     $altura= $_POST["altura"];
     $area = $base * $altura / 2;
     echo "<h3>Resultado</h3>";
     echo "\$base = $base <br>";
     echo "\$altura = $altura <br>";
     echo "\$area = $area <br>";
     echo "<a href='index.php'>Nuevo Calculo </a>";
 }
 ?>
</body>
    