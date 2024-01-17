<?php
class Capitales extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Capital');
	}

	public function index()
	{
		$data['listadoCapitales'] = $this->Capital->consultarTodos();

		$this->load->view("../views/templates/header");
		$this->load->view("capitales/index", $data);
		$this->load->view("../views/templates/footer");
	}

	public function borrar($idCapitalET)
	{
		$this->Capital->eliminar($idCapitalET);
		$this->session->set_flashdata('mensaje', 'Capital eliminado Correctamente');
		redirect('capitales/index');
	}

	public function nuevo()
	{
		$this->load->view('../views/templates/header');
		$this->load->view('capitales/nuevo');
		$this->load->view('../views/templates/footer');
	}
	public function reporte()

	{
		$data['listadoCapitales'] = $this->Capital->consultarTodos();
		$this->load->view("../views/templates/header");
		$this->load->view("capitales/reporte" , $data);
		$this->load->view("../views/templates/footer");
	}

	public function guardar()
{
    $datosNuevoCapital = array(
        "paisCapitalET" => $this->input->post("paisCapitalET"),
        "nombreCapitalET" => $this->input->post("nombreCapitalET"),
        "latitudCapitalET" => $this->input->post("latitudCapitalET"),
        "longitudCapitalET" => $this->input->post("longitudCapitalET"),
    );
    $this->Capital->insertar($datosNuevoCapital);

    $this->session->set_flashdata('mensaje', 'Capital agregado Correctamente');
    redirect('capitales/index');
}

}
