<?php 

//require("C:/wamp64/www/Proyectos/DBU/controllers/PsiController.php");

$user_controller = new UsersController();
$usuarios = $user_controller->get();

if( empty($usuarios) ) {
	print( '
		<div class="container">
			<p class="item  error">No hay usuarios</p>
		</div>
	');
} else {
	$template_usuarios = '
	
	<div class="gestion">
		<div class="gestion__nombre">
			<h2 class="no-margin gestion__titulo">Gestión de Usuarios</h2>
		</div>

		<div class="gestion__area">
			<div class="busqueda">
				<input class="campo__buscar" type="text" placeholder="Buscar Usuario">
				<button class="boton boton--buscar">Buscar</button>
			</div>  

			<form method="POST">
				<input type="hidden" name="r" value="cuenta-add">
				<input class="boton boton--nuevo" type="submit" value="Crear Cuenta">
			</form>
		</div>
		<div class="contenedor ">   
			<div class="contenedor__tabla">    
				<table class="tabla">
					<thead >
					<tr>
						<th>Id</th>
						<th>Paciente</th>
						<th>DNI</th>
						<th>Nombre Usuario</th>
						<th>Contraseña</th>
                        <th>Rol</th>
						<th class="act">Acciones</th>
						<th>
						<form method="POST">
								<input type="hidden" name="r" value="usuarios-add">
								<input class="boton boton--nuevo" type="submit" value="Nuevo">
						</form>
						</th>
						
					</tr>
					</thead>
					<tbody>';

            for ($n=0; $n < count($usuarios); $n++) { 
				$template_usuarios .= '
					<tr>
					    
						<td>' .  $usuarios[$n]['IDCARGO'] . '</td>
                        <td>' .  $usuarios[$n]['Paciente'] . '</td>
						<td>' .  $usuarios[$n]['dni_per'] . '</td>
						<td>' .  $usuarios[$n]['USER'] . '</td>
						<td>' .  $usuarios[$n]['PASS'] . '</td>
						<td >' .  $usuarios[$n]['ROL'] . '</td>
						

					
						<td  class="action">
							<form method="POST">
								<input type="hidden" name="r" value="cuenta-edit">
								<input type="hidden" name="idcargo" value="' .$usuarios[$n]['IDCARGO'] . '">
								<input type="hidden" name="dni_per" value="' .$usuarios[$n]['dni_per'] . '">
								<input class="boton--editar" type="submit" value="">
							</form>
					
							<form method="POST">
								<input type="hidden" name="r" value="cuenta-delete">
								<input type="hidden" name="user" value="' . $usuarios[$n]['USER'] . '">
								<input class="boton--eliminar" type="submit" value="">
							</form>
							
						</td>
					</tr>
			'; 
            }
	

		$template_usuarios  .= '
				    </tbody>
				</table>
			</div>
		</div>  
	</div>

	</body>
  </main>

  </html>

	';

    printf($template_usuarios);
}

    

