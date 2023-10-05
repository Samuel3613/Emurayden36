<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$edad = $_POST["edad"];
$carrera = $_POST["carrera"];
if($nombre!=""&&$apellido!=""&&$dni!=""&&$edad!=""){
    echo "<h1> Hola $nombre, $apellido con dni:$dni</h1>";
        if($edad<=18){
        echo "<div>No sos mayor de edad, para inscribirte</div>";
        }
        else{
            if($carrera!="multimedial"){
                echo "<h2>No hay cupos</h2>";}
            else{echo "<h3>Inscripto correctamente</h3>";}
            }
}
else{ echo "<div>complete todos los campos</div>";}
?>