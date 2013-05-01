<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	public function view($id)
	{
		$this->load->model('Team_model');
		$this->load->model('Player_model');
		
		$data['team'] = $this->Team_model->get_by_id($id);
		$data['players'] = $this->Player_model->get_by_team($id);
		
		$this->load->view('team/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */