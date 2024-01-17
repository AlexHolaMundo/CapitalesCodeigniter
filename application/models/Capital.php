<?php
class Capital extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function insertar($datos)
	{
		$respuesta = $this->db->insert('capitalET', $datos);
		return $respuesta;
	}

	function consultarTodos()
	{
		$capitales = $this->db->get('capitalET');
		if ($capitales->num_rows() > 0) {
			return $capitales->result();
		} else {
			return false;
		}
	}

	function eliminar($id) {
		$this->db->where('idCapitalET', $id);
		$return = $this->db->delete('capitalET');
	}
}
