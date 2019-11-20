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
<h1>Agregar Estudiante</h1>
    <form action="save.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="idEstudiante" id="idEstudiante" placeholder= "Ingrese id">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder= "Ingrese Nombre">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder= "Ingrese Apellido">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="DOB" id="DOB" placeholder= "Ingrese DOB">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder= "Ingrese Direccion">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="Estado" id="Estado" placeholder= "Ingrese Estado">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder= "Ingrese Ciudad">
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" name="Codigo_Postal" id="Codigo_Postal"placeholder= "Ingrese Codigo Postal">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="Grado" id="Grado" placeholder= "Ingrese Grado">
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" name="idSede" id="idSede" placeholder= "idSede">
    </div>
        <input type="submit" class="btn btn-primary" value="Guardar Estudiante">
        <br>
        <br>
        <a href="index.php" class="btn btn-danger" >Volver</a>
    </form>
</div>
</body>
</html>
