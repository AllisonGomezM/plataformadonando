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
		$to = "info@cruzadaporlaguajira.com.co";
		$subject =$this->input->post("name", "Quiero contactarme con ustedes, quiero ser parte de esta cruzada. YO APOYO LA CRUZADA POR LA GUAJIRA") ;
		$message = $this->input->post("message") ;
		$headers = "From:" . $from;
		if(mail($to,$subject,$message, $headers)){
			redirect(site_url("welcome/msjpage"));

		}else{
			echo "The email message not sent.";	
		}

	}
	public function sendcompra(){
	
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
	public function successpage()
	{
		$this->load->view('paginartapayu/head');
		$this->load->view('paginartapayu/index');
		$this->load->view('paginartapayu/footer');
		$this->load->library('form_validation');
 
	}
	public function comprapage()
	{
		$this->load->view('paginartapayu/head');
		$this->load->view('paginacompra/index');
		$this->load->view('paginartapayu/footer');
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
	   
		  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	   
		  if ($this->form_validation->run() == FALSE) {
	   
			redirect(site_url("welcome/index"));
	   
		}
		 else {
	   
			redirect(site_url("welcome/successpage"));
	   
	   }
	}
	public function msjpage()
	{
		$this->load->view('paginamsj/index');
}

}
