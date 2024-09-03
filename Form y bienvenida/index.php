<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <h1>Formulario</h1>
    <form action="controlador.php" method="GET">
        <div class="mb-3">
            <label class="form-label">Usuario:</label>
            <input class="form-control" type="text" name="usuario" value="">
        </div>
         <div class="mb-3">
            <label class="form-label">Contrasenia:</label>
            <input class="form-control" type="password" name="contrasenia" value="">
        </div>
        
        <input class="btn btn-success" type="submit" name="Aceptar" value="Aceptar">
        <input class="btn btn-danger" type="submit" name="Cancelar" value="Cancelar">
        
        

        
    </form>
    
</body>
</html>