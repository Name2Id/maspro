<?php
require_once './Autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>maspro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            Prueba::_display('./files/header.php');
            Prueba::_display('./files/container.php');
        ?>
        <h2 class="header">PHP - CLASSES ( mini:API )</h2>
        <div class="container">
            <section class="content">
                <h2 class="titles">trait TEST</h2>
                <p class="p">
                este trait define un trait llamado "Test" que contiene una función 
                estática llamada "test". Cuando se llama a esta función, se devuelve 
                la cadena de texto "si funciona el autoload". El trait "Test" puede ser 
                utilizado por otras clases para heredar la funcionalidad definida en él.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">class Prueba</h2>
                <p class="p">
                esta clase "Prueba" utiliza el trait "Test" y contiene varias funciones 
                estáticas que devuelven cadenas de texto representando etiquetas HTML y 
                enlaces a archivos CSS. Estas funciones pueden ser utilizadas para generar 
                y mostrar contenido HTML en una aplicación PHP.
                </p>
            </section>
            <header class="header">Funciones</header>
            <section class="content">
                <h2 class="titles">funcion rg</h2>
                <p class="p">
                esta función "rg" toma una etiqueta HTML como argumento y devuelve 
                la cadena de texto correspondiente al cierre de esa etiqueta. 
                Por ejemplo, si se llama a la función rg("div"), devolverá la cadena "
                <?php echo htmlspecialchars('</div>');?>". Esta función puede ser útil al 
                generar y manipular contenido HTML dinámicamente en una aplicación PHP.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">funcion autoload</h2>
                <p class="p">
                esta función "autoload" se utiliza para cargar dinámicamente archivos 
                de clases en PHP. Cuando se llama a una clase y el archivo correspondiente 
                no se ha incluido previamente, esta función es invocada y se encarga de 
                incluir el archivo de la clase utilizando la instrucción "include_once". 
                Esto permite cargar las definiciones de las clases según sea necesario 
                durante la ejecución del programa.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">funcion spl_autoload_register</h2>
                <p class="p">
                esta funcion establece un mecanismo de carga automática de clases en PHP. 
                Al registrar la función "autoload" con "spl_autoload_register", 
                PHP utilizará automáticamente esa función para cargar las clases cuando 
                sean necesarias. Esto simplifica el proceso de carga manual de archivos de clases 
                y facilita la organización y el mantenimiento del código.
                </p>
            </section>
        </div>
        <header class="header">Files</header>
        <div class="container">
            <section class="content">
                <h2 class="titles">includes</h2>
                <p class="p">
                esta carpeta contiene los archivos 
                que mantienen en su interior codigo que 
                puede ser reutilizado en todas las
                paginas del sitio web.
                </p>
            </section>
        </div>
        <h2 class="header">CSS - CLASES ( mini:Framework )</h2>
        <div class="container">
            <section class="content">
                <h2 class="titles">class container</h2>
                <p class="p">
                esta clase establece un contenedor flexible con alineación vertical 
                y distribución uniforme del espacio disponible. El contenedor ocupará 
                el 100% de la altura y el ancho del elemento contenedor padre, tendrá 
                un fondo negro y mostrará una barra de desplazamiento si el contenido 
                excede el tamaño del contenedor.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">class content</h2>
                <p class="p">
                esta clase establece un elemento con un margen de 15 píxeles alrededor, 
                un ancho del 100% del contenedor padre, una altura mínima de 100 píxeles, 
                un relleno interno de 20 píxeles, un borde delgado de color "palevioletred" 
                y un ancho mínimo del 46% del contenedor padre.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">class titles</h2>
                <p class="p">
                esta clase establece un tamaño de fuente relativo al ancho 
                de la ventana del navegador para el texto dentro del elemento 
                con la clase "titles". Además, el texto se alinea al centro 
                horizontalmente y se agrega un relleno de 20 píxeles en la parte 
                superior del elemento.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">class p</h2>
                <p class="p">
                esta clase establece un tamaño de fuente relativo al ancho 
                de la ventana del navegador para los párrafos (elementos "p") 
                dentro del documento. Además, se agrega un margen superior de 10 píxeles, 
                el texto se justifica, se agrega un borde delgado de color "palevioletred" 
                y se agrega un relleno interno de 10 píxeles alrededor del contenido del párrafo.
                </p>
            </section>
            <section class="content">
                <h2 class="titles">class header</h2>
                <p class="p">
                este código establece un contenedor flexible con una serie de propiedades 
                de estilo para el encabezado (elemento con la clase "header"). 
                El encabezado ocupará el 100% del ancho disponible, 
                tendrá un relleno interno de 3 píxeles, un tamaño de fuente relativo 
                al ancho de la ventana, un texto centrado horizontalmente, 
                un color de fondo con una opacidad específica, una altura mínima de 130 píxeles 
                y alineación central tanto horizontal como vertical para los elementos internos.
                </p>
            </section>
        </div>
        <h2 class="header">YOUTUBE - VIDEOS</h2>
        <div class="container">
            <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/-l9N019Kjxk" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture; 
            web-share" allowfullscreen class="content">
            </iframe>
            <iframe width="560" height="315" class="content"
            src="https://www.youtube.com/embed/mUMLdkryaHM" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture; 
            web-share" allowfullscreen>
            </iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zgK4jQWa6N0" 
                title="YouTube video player" 
                frameborder="0" allow="accelerometer; 
                autoplay; clipboard-write; encrypted-media; 
                gyroscope; picture-in-picture; web-share" class="content"
            allowfullscreen></iframe>
            <section class="content">
                <?php
                echo Prueba::_title('2');
                    echo "Recurso para agregar iconos a tu proyecto";
                echo rg('h2');
                echo "<pre>";
                echo str_replace(' ', '',htmlspecialchars('<script 
                src="https://kit.fontawesome.com/
                51765d8f2a.js" 
                crossorigin="anonymous">
                </script>'));
                echo "</pre>";
                ?>
            </section>
        </div>
        <footer class="header">
            &copy;Ramiro. <a href="https://www.instagram.com/_rghash_/">
            <i class="fa-brands fa-instagram"></i>
            </a> - <a href="https://github.com/Name2Id"><i class="fa-brands fa-github"></i></a>
        </footer>
        <script src="https://kit.fontawesome.com/51765d8f2a.js" crossorigin="anonymous"></script>
    </body>
</html>