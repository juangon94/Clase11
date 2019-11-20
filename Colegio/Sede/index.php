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
<h1>CRUD Sede</h1>
<a href="save_form.php" class="btn btn-primary">Agregar Sede</a>
<br>
<br>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">Nombre Colegio</th>
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
    $sql ="select Sede.* , Colegio.Nombre as 'Nombre_Colegio' FROM Sede inner join Colegio on sede.idColegio = Colegio.idColegio";
    
    $query = mysqli_query($connection, $sql);
    
    if ( mysqli_num_rows($query) > 0 ) {
        while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td> ". $row ["idSede"] ."</td>";
                echo "<td> ". $row ["Nombre"] ."</td>";
                echo "<td> ". $row ["Direccion"] ."</td>";
                echo "<td> ". $row ["Ciudad"] ."</td>";
                echo "<td> ". $row ["Codigo_Postal"] ."</td>";
                echo "<td> ". $row ["Nombre_Colegio"] ."</td>";
                echo "<td> <a href='#'><i class='fa fa-fw fa-edit'></i></a> <a href='#'><i class='fa fa-fw fa-trash-o'></i></a></td>";

                echo '</tr>';
        }
    }


?>
  </tbody>
</table>
 
</div>
 
</body>
</html>
