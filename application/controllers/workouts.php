<?php 

class Workouts extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }

  function index() {
		$this->load->model('workouts_model');
		$workouts['workouts'] = $this->workouts_model->getData();
		$workouts['stuff'] = $this->workouts_model->getInfo();

		$this->load->view('workouts', $workouts);

	}

	function create() {
		if(array_key_exists('create',$_POST)){
			$data = array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'job_description' => $this->input->post('job_description'),
				'phone' => $this->input->post('phone')
			);
			
			$this->workouts_model->add_record($data);
		}
			$this->index();
		}

	function createAgain() {
		if(array_key_exists('submit',$_POST)){
			$data = array(
				'chest' => $this->input->post('chest'),
				'arms' => $this->input->post('arms'),
				'legs' => $this->input->post('legs'),
				'abbs' => $this->input->post('abbs'),
				'back' => $this->input->post('back')
			);
			$this->workouts_model->add_workout($data);
		}
			$this->index();
		}


	}

