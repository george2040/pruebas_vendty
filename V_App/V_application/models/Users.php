<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Users extends CI_MODEL
{
	public function __construct()
	{

		parent::__construct();

	}

	//obtenemos los usuarios
	public function get_users()
	{

		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{

			return $query->result();

		}

	}

	//eliminamos usuarios
	public function delete_user($id)
	{

		$this->db->where('id',$id);
		return $this->db->delete('users');

	}

	//editamos usuarios
	public function edit_user($id,$nombre,$email)
	{

		$fecha = date('Y-m-d');

		$data = array(

			'firts_name'	=>		$nombre,
			'last_name'		=>		$email,

		);

		$this->db->where('id',$id);
		$this->db->update('users',$data);

	}

	//añadimos usuarios
	public function new_user($firts_name,$last_name,$lugar_nac,$fecha_nac,$sexo,$account_skype)
	{

		$fecha = date('Y-m-d');

		$data = array(

			'firts_name'	=>		$firts_name,
			'last_name'		=>		$last_name,
            'lugar_nac' => $lugar_nac,
            'fecha_nac' => $fecha_nac,
            'sexo'		=>		$last_name,
            'account_skype' => account_skype,
            'created_at' => $fecha,
            'updated_at' => $fecha
			

		);

		$this->db->insert('users',$data);

	}

}