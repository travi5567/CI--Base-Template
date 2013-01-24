<?php 

class Site extends CI_Controller {

  function index() {
		$this->load->model('data_model');
		$employee['records'] = $this->data_model->getAll();

		//$this->load->model('site_model');
		//$data['title'] = $this->data_model->takeAll();


		$this->load->view('home', $employee);

	}

	function workout() {
		$this->load->model('workouts_model');
		$workouts['records'] = $this->data_model->getData();

		//$this->load->model('site_model');
		//$data['title'] = $this->data_model->takeAll();


		$this->load->view('workouts', $workouts);

	}

}

