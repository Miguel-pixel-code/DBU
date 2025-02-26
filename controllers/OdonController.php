<?php 
//require_once("C:/wamp64/www/Proyectos/DBU/models/HistorialPsicologico.php");
class OdonController {
	private $model;

	public function __construct() {
		$this->model = new  HistorialOdontologico();
	}

	public function set( $odontologia_data = array() ) {
		return $this->model->set($odontologia_data);
	}

	public function get( $odontologia_id = '' ) {
		return $this->model->get($odontologia_id);
	}

	public function del( $odontologia_id = '' ) {
		return $this->model->del($odontologia_id);
	}

	public function update( $odontologia_data = array() ) {
		return $this->model->update($odontologia_data);
	}



}