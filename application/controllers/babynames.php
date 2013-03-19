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

			$this -> name('n');
		}

		public function name($sex)
		{

			$this -> load -> model('babynames_model');

			$babyname = $this -> babynames_model -> get_random_id($sex);
			foreach ($babyname as $row):

				$name_id = $row -> name_id;
			endforeach;

			$data['thought'] = $this -> babynames_model -> get_name($name_id);
			foreach ($data['thought'] as $row):
				
				$data['title'] = "Really Simple Baby Name Generator: ".$row -> name;

			endforeach;

			$data['pageload'] = 'pages/babynames';
			$this -> load -> vars($data);
			$this -> load -> view('template');
		}

		public function like_name($id)
		{
			$this -> load -> model('babynames_model');
			$this -> babynames_model -> like_name($id);
			redirect('/babynames');

		}

		public function dislike_name($id)
		{
			$this -> load -> model('babynames_model');
			$this -> babynames_model -> dislike_name($id);
			redirect('/babynames');

		}

	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */
