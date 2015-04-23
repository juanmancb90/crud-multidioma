<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Home_model extends CI_MODEL
{
	public function __construct()
	{
		parent::__construct();
	}

	//hacemos la inserción en la tabla correspondiente
	public function insertar($t, $d, $idioma)
	{
		$data = array(
			'title'		    => 		$t,
			'description' 	=>		$d,
		);

		return $this->db->insert('gift_'.$idioma, $data);
	}

	/**
	 * 
	 */
	public function get_es($idioma)
	{
		//obtener datos
		$query = $this->db->get('gift_'.$idioma);

		return $query->result();
	}

	/**
	 * [get_en description]
	 * @param  [type] $idioma [description]
	 * @return [type]         [description]
	 */
	public function get_en($idioma)
	{
		//obtener datos
		$query = $this->db->get('gift_'.$idioma);

		return $query->result();
	}

	/**
	 * [get_fr description]
	 * @param  [type] $idioma [description]
	 * @return [type]         [description]
	 */
	public function get_fr($idioma)
	{
		//obtener datos
		$query = $this->db->get('gift_'.$idioma);

		return $query->result();
	}

	/**
	 * [getbyID description]
	 * @param  [type] $id     [description]
	 * @param  [type] $idioma [description]
	 * @return [type]         [description]
	 */
	public function getbyID($id, $idioma){
		$query = $this->db->where('id_gift',$id);
		$query = $this->db->get('gift_'.$idioma);

		return $query->result();
	}

	/**
	 * funcion para editar un obsequio
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function editar($i, $t, $d, $idioma)
	{
		$dataUp = array('title' => $t, 'description' => $d,);
		$this->db->where('id_gift', $i);
		$this->db->update('gift_'.$idioma, $dataUp);
	}

	/**
	 * [eliminar description]
	 * @param  [type] $id     [description]
	 * @param  [type] $idioma [description]
	 * @return [type]         [description]
	 */
	public function eliminar($id, $idioma){
		$this->db->where('id_gift', $id);
		$this->db->delete('gift_'.$idioma);
	}
}

//end model home_model.php 