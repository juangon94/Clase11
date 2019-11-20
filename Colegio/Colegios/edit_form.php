<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h1>Agregar Colegio</h1>
    <form action="edit.php" method="post">
    <?php 
    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "cl";
    
    
    $connection = mysqli_connect ($server,$username,$password,$database);
    if (!$connection){
      die("error al conectar a base de datos".mysqli_connect_error());
    }
    $sql ="select * FROM Colegio where idColegio = ".$_GET['idColegio'];
    
    $query = mysqli_query($connection, $sql);
    
    if ( mysqli_num_rows($query) > 0 ) {
        if ($row = mysqli_fetch_assoc($query)) {
            echo '<div class="form-group">';
            echo '<input type="text" value="'. $row ["idColegio"] .'" readonly="true" class="form-control" name="idColegio" id="idColegio" placeholder= "Ingrese id">';
            echo '</div>';
            echo '<div class="form-group">';
            echo ' <input type="text" value="'. $row ["Nombre"] .'" class="form-control" name="Nombre" id="Nombre" placeholder= "Ingrese Nombre">';
            echo '</div>';
            echo '<div class="form-group">';
            echo ' <input type="text" value="'. $row ["Direccion"] .'" class="form-control" name="Direccion" id="Direccion" placeholder= "Ingrese Direccion">';
            echo '</div>';
            echo '<div class="form-group">';
            echo '  <input type="text"  value= "'. $row ["Estado"] .'"class="form-control" name="Estado" id="Estado" placeholder= "Ingrese Estado">';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<input type="text" value= "'. $row ["Ciudad"] .'"class="form-control" name="Ciudad" id="Ciudad" placeholder= "Ingrese Ciudad">';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<input type="text" value= "'. $row ["Codigo_Postal"] .'" class="form-control" name="Codigo_Postal" id="Codigo_Postal"placeholder= "Ingrese Codigo Postal"> ';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<input type="text" value= "'. $row ["Email"] .'" class="form-control" name="Email" id="Email" placeholder= "Ingrese E-mail">';
            echo '</div>';    
            echo '<div class="form-group">';
            echo ' <input type="text" value="'. $row["Telefono"] .'" class="form-control" name="Telefono" id="Telefono" placeholder= "Ingrese Telefono">';      
            echo '</div>'; 
        
        }
    }
    ?>
        <input type="submit" class="btn btn-primary" value="Guardar Colegio">
        <br>
        <br>
        <a href="index.php" class="btn btn-danger" >Volver</a>
    </form>
</div>
</body>
</html>
