<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()	{
		$data = array();
		$data['list'] = $this->home_m->view('board');
		$this->load->view('/home/list', $data);
	}

	public function new() {
		$this->load->view('/home/new');
	}

	public function edit($idx = 0) {
		if($idx == 0) {
			echo 'Not Correct Connection';
			return false;
		}

		$data = array();

		$query = array();
		$query['idx'] = $idx;
		$data['selected'] = $this->home_m->view('board', $query);
		$this->load->view('/home/edit', $data);
	}

	public function create() {
		$query = $this->input->post();
		$result = $this->home_m->create('board', $query);
		if($result > 0) {
			header('Location: /');
		}
	}

	public function update($idx = 0) {
		$query = $this->input->post();
		$query['idx'] = $idx;

		$result = $this->home_m->update('board', $query);
		if($result > 0) {
			header('Location: /');
		}
	}

	public function remove($idx = 0) {
		$query = $this->input->post();
		$query['idx'] = $idx;
		$result = $this->home_m->delete('board', $query);	
		if($result > 0) {
			header('Location: /');
		}
	}
}
