<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Crud_model extends CI_Model{

 	public function __construct()
	{
		$this->load->database();
	}

 	public function create()
 	{
		$this->load->helper('url');

		$data = array(

			'name'				=>		$this->input->post('name'),
			'last_name'			=>		$this->input->post('last_name'),
            'identification' 	=> 		$this->input->post('identification'),
            'age' 				=> 		$this->input->post('age'),
            'gender'			=>		$this->input->post('gender'),
            'country'			=>		$this->input->post('country'),
            'city'				=>		$this->input->post('city'),
            'address'			=>		$this->input->post('address'),
            'land_phone'		=>		$this->input->post('land_phone'),
            'cel_phone'			=>		$this->input->post('cel_phone')
			

		);

		$this->db->insert('users',$data);

 	}

 	public function read()
 	{

 		$query = $this->db->get_where('users', array('state' => 1));
		return $query->result();
 	}


 	public function edit()
 	{

 		$date = Date('Y-m-d h:i:s');
 		$data = array(
			'id'				=>		$this->input->post('id'),
			'name'				=>		$this->input->post('name'),
			'last_name'			=>		$this->input->post('last_name'),
            'identification' 	=> 		$this->input->post('identification'),
            'age' 				=> 		$this->input->post('age'),
            'gender'			=>		$this->input->post('gender'),
            'country'			=>		$this->input->post('country'),
            'city'				=>		$this->input->post('city'),
            'address'			=>		$this->input->post('address'),
            'land_phone'		=>		$this->input->post('land_phone'),
            'cel_phone'			=>		$this->input->post('cel_phone'),
            'update_time'		=>		$date

			);


			$this->db->where('id', $data['id']);
			$this->db->update('users', $data); 
 	}



	public function update($id)
	 	{


	 		$query = $this->db->get_where('users', array('id' => $id));
			return $query->result_array();

				
	 	}


 	public function delete($id)
 	{

 		$data = array(
			'state'				=>		0
		);

 		$this->db->where('id', $id);
		$this->db->update('users', $data); 

 	}


 }