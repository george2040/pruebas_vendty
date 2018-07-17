<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_front extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->helper('url');


	}

	public function index()
	{	

		$data['users'] = $this->crud_model->read();
		

		$this->load->view('crud_front',$data);

	}

	public function create()
	{
		
			$this->load->helper('form');
			$this->load->library('form_validation');

 			$this->form_validation->set_rules('name', 'name', 'required');


		if ($this->form_validation->run() === false)
			{
				$this->load->view('crud_create');

			}
			else
			{
				$this->crud_model->create();
				if( $this->db->affected_rows() == 1 )
				echo '<h1>Se ha creado el usuario correctamente</h1>';
				header( "refresh:1;url=http://localhost/codeigniter/index.php/crud_front/" );
			}
	

			

			}



	public function update($id)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data['user'] = $this->crud_model->update($id);
			$this->load->view('crud_update',$data);

		}

	public function edit(){

			$this->crud_model->edit();
			if( $this->db->affected_rows() == 1 )
				echo '<h1>Se ha actualizado el usuario correctamente</h1>';

				header( "refresh:1;url=http://localhost/codeigniter/index.php/crud_front/" );
		}

	public function delete($id){

			$data['user'] = $this->crud_model->delete($id);

			if( $this->db->affected_rows() == 1 )
				echo '<h1>Se ha eliminado el usuario correctamente</h1>';

				header( "refresh:1;url=http://localhost/codeigniter/index.php/crud_front/" );
		}




	}



