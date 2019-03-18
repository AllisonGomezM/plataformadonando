<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function sendmsg()
	{
		$this->load->helper('form');
		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from =  $this->input->post("email");
		$cc="gestion@inkdigital.com";
		$cco="soporte@inkdigital.com";
		$to = "donandosonrisascol@gmail.com";
		$subject =$this->input->post("name", "Quiero contactarme con ustedes, quiero ser parte de esta cruzada. YO APOYO LA CRUZADA POR LA GUAJIRA") ;
		$message = $this->input->post("message") ;
		$headers = "From:" . $from;
		if(mail($to,$subject,$message, $headers)){
			$this->session->set_flashdata('envio', 
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Se ha enviado exitosamente</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>');
		}else{
			$this->session->set_flashdata('envio',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error!</strong> Un error ha ocurrido procesando la solicitud
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>');
		}

	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('paginaprincipal/head');
		$this->load->view('paginaprincipal/index');
		$this->load->view('paginaprincipal/footer');
	}
}
