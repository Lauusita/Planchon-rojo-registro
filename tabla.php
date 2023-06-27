<?php

#conecto la base de datos
$connect = mysqli_connect('localhost', 'root', '', 'planchon_rojo');

# se arma el comando (también se encuentra en el mismo mysql en la parte superior: SELECT * FROM `registrodinero`)

$search = "SELECT * FROM `registrodinero`";

# enviar los datos 

$submit = mysqli_query($connect, $search)

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table table-danger table-striped">
                <thead>
                    <tr>
                    <th scope="col">mes</th>
                    <th scope="col">día</th>
                    <th scope="col">semana</th>
                    <th scope="col">dinero</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = mysqli_fetch_array($submit)){?>
                        <td> <?php echo $fila['mes']; ?></td>
                        <td> <?php echo $fila['dia']; ?></td>
                        <td> <?php echo $fila ['semana']; ?></td>
                        <td> <?php echo $fila['plata']; ?></td>
                    <tr>
                        <?php } ?>
                    <td></td>

                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
