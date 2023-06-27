<?php
    $mes = $_POST['mes'];
    $dia = $_POST['dia'];
    $semana = $_POST['semana'];
    $plata = $_POST['plata'] ;

echo $plata;
$connect =mysqli_connect('localhost','root' , '', 'planchon_rojo');

$insertar = "INSERT INTO registrodinero (mes, dia, semana, plata) values('$mes', '$dia', '$semana', '$plata')";

$enviar = mysqli_query($connect, $insertar);

if ($enviar){
    echo "<h1> Los datos se han enviado </h1>";
}
else{
    echo "<h1> Los datos no se han enviado </h1>";
}

mysqli_close($connect);
?>

<div class="row" style="mx-2">
<a href="index.html" >Volver</a></div>