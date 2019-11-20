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
        <?php 
        $server = "localhost:3306";
        $username = "root";
        $password = "";
        $database = "cl";


        $connection = mysqli_connect ($server,$username,$password,$database);
        if (!$connection){
        die("error al conectar a base de datos".mysqli_connect_error());
        }
        $sql = "insert into Colegio (idColegio,Nombre,Direccion,Estado,Ciudad,Codigo_Postal,Email,Telefono) values (".
        $_POST['idColegio'].",".
        "'".$_POST['Nombre']."',".
        "'".$_POST['Direccion']."',".
        "'".$_POST['Estado']."',".
        "'".$_POST['Ciudad']."',".
        "'".$_POST['Codigo_Postal']."',".
        "'".$_POST['Email']."',".
        "'".$_POST['Telefono'].
        "')";

        $query = mysqli_query ($connection,$sql);

        if ($query) {
            echo "<div class='alert alert-success' role='alert'>Colegio Registrado Exitosamente </div>";
            echo "<a href='index.php'> Volver </a>";
        }
        else {
            echo "error: sql". mysqli_error ($connection);
        }
        ?>
    </div>
</body>
</html>