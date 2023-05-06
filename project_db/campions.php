<?php   
    include('MySQL.php'); 
    if(isset($_POST['submit'])){
        // procesar datos enviados del formulario
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $nivell = $_POST['nivell'];
        $data = $_POST['data'];
        
        // hacer algo con los datos recibidos
        echo "Los datos han sido guardados en la BD: $id, $nom, $nivell, $data";
      }
    //   $jugadors = new class{
    //     public $name = 'Тяпк';
    //     public $id = 50;
    // };
      ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Campions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleGestor.css" />
        <script src=""></script>
    </head>
    <body>
	<header>
            <h1>Gestor Campions</h1>
	</header>
	<section>
            <div class="crearModificarJugador">
                <h3>Crear/Modificar Jugador</h3>
                <form action="campions.php" method="post">
                    <input type="hidden" name="form" value="jugador">
                    <input type="text" name="id" placeholder="Id" /><br /><br />
                    <input type="text" name="nombre" placeholder="Nom"/><br /><br />
                    <input type="number" name="nivel" placeholder="Nivell"/><br /><br />
                    <input type="date" name="fecha" placeholder="Data alta" /><br /><br />
                    <label><input type="radio" name="accion" value="crear" checked> Crear</label><br />
                    <label><input type="radio" name="accion" value="modificar"> Modificar<br /></label><br />
                    <input type="submit" value="Aceptar">
                </form>
            </div>
            <div class="crearModificarCampio">
                <h3>Crear/Modificar Campió</h3>
                <form action="campions.php" method="post">
                    <input type="hidden" name="form" value="campio">
                    <input type="text" name="id" placeholder="Id"/><br /><br />
                    <input type="text" name="nombre" placeholder="Nom"/><br /><br />
                    <input type="text" name="tipo" placeholder="Tipus"/><br /><br />
                    <input type="number" name="precio" placeholder="Preu" /><br /><br />
                    <input type="date" name="fecha" placeholder="Data alta" /><br /><br />
                    <label><input type="radio" name="accion" value="crear" checked> Crear</label><br />
                    <label><input type="radio" name="accion" value="modificar"> Modificar<br /></label><br />
                    <input type="submit" value="Aceptar">
                </form>
            </div>
            <div class="crearModificarBatalla">
                <h3>Crear / Modificar Batalla</h3>  
                <form action="campions.php" method="post">
                    <input type="hidden" name="form" value="batalla">
                    <input type="text" name="idJ" placeholder="Id jugador"/><br /><br />
                    <input type="text" name="idC" placeholder="Id Campió"/><br /><br />
                    <input type="number" name="cantidad" placeholder="Cantitat" /><br /><br />
                    <label><input type="radio" name="accion" value="crear" checked> Crear</label><br />
                    <label><input type="radio" name="accion" value="modificar"> Modificar<br /></label><br />
                    <input type="submit" value="Aceptar">
                </form>
            </div>
            <div class="eliminar">
                <h3>Eliminar</h3>
                <form action="campions.php" method="post">
                    <input type="hidden" name="form" value="jugador">
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="text" name="id" placeholder="Id jugador"/><br /><br />
                    <input type="submit" value="Eliminar">
                </form>
                <form action="campions.php" method="post">
                    <input type="hidden" name="form" value="campio">
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="text" name="id" placeholder="Id campió"/><br /><br />
                    <input type="submit" value="Eliminar">
                </form>
                <form action="campions.php" method="post">
                    <input type="hidden" name="form" value="batalla">
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="text" name="idJ" placeholder="Id jugador"/><br /><br />
                    <input type="text" name="idC" placeholder="Id campió"/><br /><br />
                    <input type="submit" value="Eliminar">
                </form>
                
            </div>
	</section>
        <aside>
            <div class="jugadors">
                <h3>Jugadors</h3>
                <?php
                    if( !is_null($jugadors) ){
                        echo '<table class="tablaJugador">';
                        echo '<tr><th>Id</th><th>Nom</th><th>Nivell</th><th>Data</th></tr>';
                        
                        // Recorrer los resultados con un bucle foreach
                        foreach ($resultado as $jugador) {
                            // Acceder a cada campo del producto
                            $id = $jugador['id'];
                            $nombre = $jugador['nombre'];
                            $nivel = $jugador['nivel'];
                            $data = $jugador['data'];
                        }
                                            echo '</table>';
                                        }
                                    ?>
            </div>
            <div class="relacions">
                <h3>Batalles</h3>
                <?php
                    if( !is_null($batallas) ){
                        echo '<table class="tablaBatalla">';
                        echo '<tr><th>Id Jugador</th><th>Id Campeón</th><th>Cantidad</th>';
                        
                        // Recorrer los resultados con un bucle foreach
                        foreach ($resultado as $batallas) {
                            // Acceder a cada campo del producto
                            $id = $batallas['id'];
                            $nombre = $batallas['nombre'];
                            $nivel = $batallas['nivel'];
                            $data = $batallas['data'];
                        }
                        
                        
                        echo '</table>';
                    }
                ?>
            </div>
            <div class="campions">
                <h3>Campions</h3>
                <?php
                    if( !is_null($campeones) ){
                        echo '<table class="tablaCampeon">';
                        echo '<tr><th>Id</th><th>Nom</th><th>Tipus</th><th>Preu</th><th>Data</th></tr>';
                        
                        // Recorrer los resultados con un bucle foreach
                        foreach ($resultado as $campeones) {
                            // Acceder a cada campo del producto
                            $id = $campeones['id'];
                            $nombre = $campeones['nombre'];
                            $nivel = $campeones['nivel'];
                            $data = $campeones['data'];
                        }
                        
                        
                        echo '</table>';
                    }
                ?>
            </div>
	</aside>
    </body>
</html>

