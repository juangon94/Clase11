<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>CRUD Colegio</h1>
<a href="save_form.php" class="btn btn-primary">Agregar Colegio</a>
<br>
<br>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Estado</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "cl";
    
    
    $connection = mysqli_connect ($server,$username,$password,$database);
    if (!$connection){
      die("error al conectar a base de datos".mysqli_connect_error());
    }
    $sql ="select * FROM Colegio";
    
    $query = mysqli_query($connection, $sql);
    
    if ( mysqli_num_rows($query) > 0 ) {
        while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td> ". $row ["idColegio"] ."</td>";
                echo "<td> ". $row ["Nombre"] ."</td>";
                echo "<td> ". $row ["Direccion"] ."</td>";
                echo "<td> ". $row ["Estado"] ."</td>";
                echo "<td> ". $row ["Ciudad"] ."</td>";
                echo "<td> ". $row ["Codigo_Postal"] ."</td>";
                echo "<td> ". $row ["Email"] ."</td>";
                echo "<td> ". $row ["Telefono"] ."</td>";
                echo "<td> <a href='edit_form.php?idColegio=". $row ["idColegio"] ."'><i class='fa fa-fw fa-edit'></i></a> <a href='delete.php?idColegio=". $row ["idColegio"] ."'><i class='fa fa-fw fa-trash-o'></i></a></td>";
                echo '</tr>';
        }
    }


?>
  </tbody>
</table>
 
</div>
 
</body>
</html>
