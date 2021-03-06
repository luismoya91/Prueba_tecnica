<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Prueba_Tecnica V.2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/fontello.css">
    </head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="icon-circulo">
            My Test
            </h1>
            <input type="checkbox" id="menu-barra">
            <label class="icon-menu" for="menu-barra"></label>
            <nav class="menu">
                <a href="index.html">Inicio</a>
                <a class="icon-agregar" href="registrar.php">Registro</a>
                <a class="icon-editar" href="modificar.php">Editar</a>            
                <a class="icon-borrar" href="eliminar_goods.php">Eliminar</a>            

            </nav>
        </div>
    </header>
    <main>
        <section id="banner">
                <img src="css/img/tecnologia.jpg">
                    <div class="contenedor">    
                        <h2>
                            Prueba Técnica Luis Miguel Moya    
                        </h2>
                    </div>
        </section>
        <section id="blog">
            <div class="contenedor">
                <article>
                    <a href="registrar.php">
                        <button>
                            <img src="css/img/registrar.jpg">
                        </button>
                            <h2>Agregar Registro</h2>
                    </a>
                </article>
                <article>
                    <a href="modificar.php">
                        <button>
                        <img src="css/img/modificar.jpg">
                        </button>
                        <h2>Editar Registro</h2>
                    </a>
                </article>
                <article>
                    <a href="eliminar_goods.php">
                        <button>
                            <img src="css/img/eliminar.jpg">                
                        </button>
                            <h2>Eliminar Registro</h2>
                    </a>
                </article>
            </div> 
        </section>
    </main>
</body>    
</html>
