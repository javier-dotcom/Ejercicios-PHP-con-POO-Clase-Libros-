<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios-PHP</title>
    <style>
    h2 {
        text-align: center;
    }

    body {
        background-color: black;
        color: azure;
    }

    .ejer {
        width: 80%;
        margin: auto;
    }

    .form {
        text-align: center;
    }

    .php {
        text-align: center;

        background-color: aquamarine;
        width: 30%;
        color: black;
        margin: 30px auto;
        padding: 10px;
    }
    </style>
</head>

<body>
    <p class="ejer"> PROGRAMACION PHP con POO - <br>Se trata de un sistema para una editorial que edita sus libros en
        formato papel
        y también en formato digital. Generar una clase llamada Libro, cuyos atributos sean: título, autor, cantidad de
        caracteres, y cantidad de ilustraciones.
        Asegurarse de que no se puedan crear instancias de esta clase. Dicha clase deberá contener los siguientes
        métodos:<br>• Método constructor: Recibe los 4 atributos. Por simplicidad, omitir la validación. <br>•
        calcularExtension(): Retorna
        "Largo", si el libro tiene más de un millón de caracteres, "Breve" si tiene menos de 150000 caracteres, y
        "Normal" de lo contrario. <br>• calcularCostoEdicion(): Retorna el costo de edición de un ejemplar. Los
        libros "normales", tienen un
        costo de edición que se almacena en una constante de clase llamada COSTO, actualmente fijado en $100. Los libros
        "largos", tienen un costo de edición que equivale al doble de un libro "normal". Los libros "breves", tienen un
        costo de edición que
        equivale a la mitad de un libro "normal". Generar una subclase llamada LibroDigital, que herede de Libro.
        <br>• Se desea que permita calcular la cantidad de bytes que tendrá el archivo. Se considera que cada
        caracter representa un byte, y
        que cada ilustración equivale a 1000 bytes. Por ejemplo, si un libro tiene 150 000 caracteres y 4 ilustraciones,
        el libro ocupará 154 000 bytes. <br>• Se desea también que pueda calcular su costo de edición. El costo de
        edición de un libro
        digital se calcula según lo que costaría editar 10 ejemplares de dicho libro en papel.
    </p>
    <h2>Resolución</h2>

    <form class="form" action="1.php#ir" method="get">
        <b> Ingrese titulo del libro:</b> <br><br>
        <input type="text" name="titulo"> <br><br>

        <b> Ingrese autor del libro:</b> <br><br>
        <input type="text" name="autor"> <br><br>

        <b> Ingrese la cantidad de caracteres del libro:</b> <br><br>
        <input type="number" name="caracteres"> <br><br>

        <b> Ingrese la cantidad de ilustracion del libro:</b> <br><br>
        <input type="number" name="ilus">

        <br> <br>

        <input type="submit" value="Enviar">
    </form>
    <div class="php">
        <?php 

 require_once "class_libro.php";
$title=$_GET["titulo"];
$author=$_GET["autor"];
$carac=$_GET["caracteres"];
$ilus=$_GET["ilus"];
$a=new LibroDigital($title,$author,$carac,$ilus);
?>
        <div id="ir"></div>
        <?php
echo "La cantidad de Bites es " .$a->CalcularBites();
echo "<br>";

echo "El costo digital es " . $a->calcularCostoEdicionDigital();
echo "<br>";

echo "La extensión es " . $a->calcularExtension();
echo "<br>";

echo "El costo de edicion es " . $a->calcularCostoEdicion();
?>
    </div>
</body>

</html>