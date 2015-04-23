<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 	}

	public function index()
	{

 		$data['cambia_idioma'] = $this->cambia_idioma();
 
		$this->load->view('home_view', $data);

	}

	private function rules(){
		$this->form_validation->set_rules(lang('home.input_titulo'),
										  lang('home.label_titulo'),
										  'required|min_length[5]|max_length[50]');

		$this->form_validation->set_rules(lang('home.textarea_descripcion'),
										  lang('home.label_descripcion'),
										  'required|min_length[5]|max_length[100]');
	}

	/**
	 * funcion para insertar obsequios
	 * @return [type] [description]
	 */
	public function insertar()
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{

			$titulo = $this->input->post(lang('home.input_titulo'));
			$descripcion = $this->input->post(lang('home.textarea_descripcion'));
			$idioma = $this->input->post('idioma');

			if($this->Home_model->insertar($titulo, $descripcion, $idioma))
			{
				echo '<script type="text/javascript">';
				echo 'console.log("data saved");';
				echo '</script>';
				redirect(base_url($idioma.'/home'),'refresh');
			}

		}
	}

	/**
	 * [listarfr description]
	 * @return [type] [description]
	 */
	public function listarfr()
	{
		$id = 'fr';
		 	$dataBD = $this->Home_model->get_es($id);

			$data = array('resultado' => $dataBD,);

			$this->load->view('home_list_view', $data);	 	
		 
	}

	/**
	 * [listaren description]
	 * @return [type] [description]
	 */
	public function listaren()
	{
		$id = 'en';
	
		 	$dataBD = $this->Home_model->get_en($id);

		 	$data = array('resultado' => $dataBD,);

			$this->load->view('home_list_view', $data);

	}

	/**
	 * [listares description]
	 * @return [type] [description]
	 */
	public function listares()
	{
		$id = 'es';


		 	$dataBD = $this->Home_model->get_fr($id);

		 	$data = array('resultado' => $dataBD,);

			$this->load->view('home_list_view', $data);
	
	}

	/**
	 * [editar description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	
	public function editar($id, $idioma)
	{
		if($id == null or !is_numeric($id) or $idioma == null){
			echo "Error data null";
			return;
		}
		else{
			
				//traer datos del modelo
				$data = array('datos' => $this->Home_model->getById($id, $idioma),);

				//validar si es vacia
				if(!empty($data['datos']))
				{
					//pasar a la vista los datos
					$this->load->view('home_edit_view', $data);
				}
				else{
					echo "Su consulta no ha arrojado resultados";
				}
		}
	}

	/**
	 * funcion para eliminar un contacto
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function eliminar($id, $idioma)
	{

		if($id == null or !is_numeric($id) or $idioma == null)
		{
			echo "Error data null";
			return;
		}
		else
		{
				//traer datos del modelo
				$data = array('datos' => $this->Home_model->getById($id, $idioma),);

				//validar si es vacia
				if(!empty($data['datos']))
				{
					//pasar a la vista los datos
					$this->load->view('home_delete_view', $data);
				}
				else
				{
					echo '<h1>'."Empty data".'</h1>';
				}
		}
	}
	/**
	 * [edit description]
	 * @return [type] [description]
	 */
	public function edit()
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('home_edit_view');
		}
		else
		{
			$id = $this->input->post('id');
			$titulo = $this->input->post(lang('home.input_titulo'));
			$descripcion = $this->input->post(lang('home.textarea_descripcion'));
			$idioma = $this->input->post('idioma');

			$this->Home_model->editar($id, $titulo, $descripcion, $idioma);
			
			echo '<script type="text/javascript">';
			echo 'console.log("data updated");';
			echo '</script>';
			redirect(base_url($idioma.'/home'),'refresh');
			

		}
	}

	/**
	 * [delete description]
	 * @return [type] [description]
	 */
	public function delete(){

		if($this->input->post())
			{
				//obtener datos post
				$idDelete = $this->input->post('id');
				$idioma = $this->input->post('idioma');

				$this->Home_model->eliminar($idDelete, $idioma);
				redirect(base_url($idioma.'/home'),'refresh');
			}

	}

		
	//cambiamos el valor del select dependiendo del primer segmento de la url
	public function cambia_idioma()
	{
	?>
		<select class="form-control">
	 	<?php
	 	if($this->uri->segment(1) == "es")
	 	{
	 	?>
	 		<option value="<?=base_url()?>es/home">ESPAÑOL</option> 
	 		<option value="<?=base_url()?>en/home">ENGLISH</option>
	 		<option value="<?=base_url()?>fr/home">FRENCH</option>'?>
	 	<?php
	 	}else{
	 		?>
	 		<option value="<?=base_url()?>en/home">ENGLISH</option> 
	 		<option value="<?=base_url()?>es/home">ESPAÑOL</option>
	 		<option value="<?=base_url()?>fr/home">FRENCH</option>'?>
	 	<?php
	 	}
	 	?>
	 	</select>
	<?php
	}
}
 
/* End of file */