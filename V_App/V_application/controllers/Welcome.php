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

	public function __construct(){
		parent::__construct();

		//cargamos el modelo crud_model
		$this->load->model('users');

	} 
	public function index()
	{
		//Listando Usuarios
		

		$data = [
			'users' => $this->users->get_users()

		];
		$this->load->view('welcome_message',$data);
	}
	 public function add_users()
    {
		
    	//comprobamos si es una petición ajax
    	if($this->input->is_ajax_request())
        {


            	$firts_name = $this->input->post('firts_name');
	        	$last_name = $this->input->post('last_name');
				$lugar_nac = $this->input->post('lugar_nac');
				$fecha_nac = $this->input->post('fecha_nac');
				$sexo = $this->input->post('sexo');
				$account_skype = $this->input->post('account_skype');

	        	//si estamos editando
            	if($this->input->post('id'))
            	{

            		$id = $this->input->post('id');
            		$this->users->edit_user($firts_name,$last_name,$lugar_nac,$fecha_nac,$sexo,$account_skype);

            	//si estamos agregando un usuario
            	}else{

            		$this->users->new_user($nombre,$email);

            	}
	        	
	        	//en cualquier caso damos ok porque todo ha salido bien
	        	//habría que hacer la comprobación de la respuesta del modelo

	        	$response = array(
				    'respuesta'	=>	'ok'
				);
            	
				echo json_encode($response);

            }
 
        }
	}
}
