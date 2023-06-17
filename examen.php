<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen Final</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=final_0907-23-17959', 'root', '', $pdo_options);
    $select = $conexion->query("SELECT codigo, nombre, precio, existencia FROM productos");
    ?>

<table border="1">
<thead>
  <tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Existencia</th>
  </tr>
</thead>
<tbody>
  <?php foreach($select->fetchAll() as $nombre) { ?>
    <tr>
      <td class="codigo"><?php echo $nombre["codigo"] ?></td>
      <td><?php echo $nombre["nombre"] ?></td>
      <td class="codigo"><?php echo $nombre["precio"] ?></td>
      <td><?php echo $nombre["existencia"] ?></td>
          </form>
      </td>
    </tr>  
  <?php } ?>
  </tbody>
</table>
</body>
</html>