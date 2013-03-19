<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Babynames extends CI_Controller
	{

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
		 * @see http://codeigniter.com/user_guide/general/urls.html
		 */
		public function index()
		{

			$visited = $this -> session -> userdata('visited');
			$this -> load -> model('babynames_model');

			

				$babyname = $this -> babynames_model -> get_random_id();
				foreach ($babyname as $row):

					$name_id = $row -> name_id;
				endforeach;

				
			
			$storedID = $this -> session -> userdata('babyname');

			$data['thought'] = $this -> babynames_model -> get_babyname($name_id);
		
			$this->load->vars($data);
			$this -> load -> view('template');
		}

	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */
