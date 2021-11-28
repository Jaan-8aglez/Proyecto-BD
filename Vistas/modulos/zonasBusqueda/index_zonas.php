<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>BUSQUEDA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>LOCALIZACION DE ZONAS</h2>
  <form rol="form" method="POST">
    <div class="form-group">
      <input type="number" class="form-control" codigo="punto_geo" placeholder="Ingresa el punto a consultar" name="punto_geo">
    </div>
    <button type="submit" class="btn btn-default">BUSCAR</button>
  </form>
<?php
if($_POST){
  require('conexion_zona.php');
  $con=conectar();
  $punto_geo=$_POST['punto_geo'];
  $SQL='SELECT punto_geo,nombre,frecuencia,latitud,longitud FROM zona WHERE punto_geo=:punto_geo';
  $stmt=$con->prepare($SQL);
  $result=$stmt->execute(array(':punto_geo'=>$punto_geo));
  $rows=$stmt->fetchAll (\PDO::FETCH_OBJ);

  if(count($rows)){
    echo "SI EXISTE LA ZONA";
    foreach ($rows as $row) {
      ?>
      <br>
      <div class="panel panel-primary">
      <div class="panel-heading">Informacion de las zonas por punto:<?php print($punto_geo)?></div>
      <div class="panel-body"></div>
      <?php print("Nombre: ".$row->nombre."<br>")?>
      <?php print("Frecuncia: ".$row->frecuencia."<br>")?>
      <?php print("Latitud: ".$row->latitud."<br>")?>
      <?php print("Longitud: ".$row->longitud."<br>")?>
      
    </div>
  </div>
  <?php
}

}else{
  echo "NO EXISTE LA ZONA";
}
  }
  ?>
</div>
</body>
</html>




