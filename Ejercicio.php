<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <div class="container formulario">
            <h1>Registro de candidatos</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono de contacto </label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3">
                <label for="nivelEstudio" class="form-label">Nivel de estudio</label>
                <select id="nivelEstudio" class="form-select" name="nivelEstudio">
                    <option>Bachiller</option>
                    <option>Tecnico</option>
                    <option>Tecnologo</option>
                    <option>Profesional</option>
                    <option>Estudiante</option>
                    <option>Universitario</option>
                </select>
            </div>
            <div class="mb-3 form-check">
                <h3>Conocimientos previos de programacion</h3>
                <label class="form-check-label" for="python">Python</label>
                <input type="checkbox" class="form-check-input" id="python" name="python">
                <br>
                <label class="form-check-label" for="html">Html</label>
                <input type="checkbox" class="form-check-input" id="html" name="html">
                <br>
                <label class="form-check-label" for="js">Java script</label>
                <input type="checkbox" class="form-check-input" id="js" name="js">
                <br>
                <label class="form-check-label" for="css">Css</label>
                <input type="checkbox" class="form-check-input" id="css" name="css">
                <br>
                <label class="form-check-label" for="php">Php</label>
                <input type="checkbox" class="form-check-input" id="php" name="php">
                <br>
                <label class="form-check-label" for="nodeJs">node js</label>
                <input type="checkbox" class="form-check-input" id="nodeJs" name="nodeJs">
                <br>
                <label class="form-check-label" for="c#">C#</label>
                <input type="REQUESTcheckbox" class="form-check-input" id="c#" name="c#">
                <br>
                <label class="form-check-label" for="typeScript">TypeScript</label>
                <input type="checkbox" class="form-check-input" id="typeScript" name="typeScript">
                <br>
            </div>
            
            <div class="mb-3">
                <h3>Conocimientos previos de ingles</h3>
                <label for="nivelEstudio" class="form-label">Nivel de estudio</label>
                <select id="nivelEstudio" class="form-select" name="nivelEstudio">
                    <option>Basico</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="reset" id="reset" class="btn btn-danger" value="Limpiar">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

