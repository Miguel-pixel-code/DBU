<?php 
//require_once("C:/wamp64/www/Proyectos/DBU/models/HistorialPsicologico.php");
class OdonController {
	private $model;
//Función que intancia un historial Odontológico
	public function __construct() {
		$this->model = new  HistorialOdontologico();
	}
//Función que envía los datos del modelo a la vista de un historial médico
	// Parámetros: Conjunto de datos de un historial Odontológico
	public function set( $odontologia_data = array() ) {
		return $this->model->set($odontologia_data);
	}
// Función que obtiene los datos un historial médico desde la vista y los envía al modelo
	// Parámetros: ID de historial Odontológico
	public function get( $odontologia_id = '' ) {
		return $this->model->get($odontologia_id);
	}
 // Función que permite eliminar un historial Odontológico
	// Parámetros: ID de historial Odontológico
	public function del( $odontologia_id = '' ) {
		return $this->model->del($odontologia_id);
	}
//Función que permite modificar datos de un historial Odontológico 
	//Parámetros: Conjuntos de datos de un historial Odontológico
	public function update( $odontologia_data = array() ) {
		return $this->model->update($odontologia_data);
	}



}
