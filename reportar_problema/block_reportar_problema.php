<?php
//crear clase php para el bloque nuevo
class block_reportar_problema extends block_base{
	public function init(){
		//titulo o nombre del bloque
		$this->title = "REPORTAR PROBLEMA";		
	}
	public function get_content() {
		//si ya existe el contenido, no crearlo denuevo
		if ($this->content !== null) {
			return $this->content;
		}
		//convertir content.php en un string
		$this->content         = new stdClass;
		$this->content->text   = file_get_contents("content.php", true);

		return $this->content;
	}
}
