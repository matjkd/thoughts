<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Welcome extends CI_Controller
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
			$this -> load -> model('thought_model');

			if ($visited != 1)
			{

				$thoughts = $this -> thought_model -> get_random_id();
				foreach ($thoughts as $row)
				:

					$thought_id = $row -> id;
				endforeach;

				$data = array(
					'visited' => 1,
					'thought' => $thought_id
				);

				$this -> session -> set_userdata($data);

			}

			$storedID = $this -> session -> userdata('thought');
			
			if($storedID == NULL) {
				$storedID = 1;
			}

			$data['thought'] = $this -> thought_model -> get_thought($storedID);
			foreach ($data['thought'] as $row)
			:

				$data['title'] = $row -> thought;

			endforeach;
			$data['pageload'] = 'pages/thoughts';
			$this -> load -> vars($data);
			$this -> load -> view('template');
		}

		public function submit_opinion()
		{
			$this -> load -> model('thought_model');
			$this -> form_validation -> set_rules('opinion', 'opinion', 'trim|required|xxs_clean');
			if ($this -> form_validation -> run() == FALSE)
			{
				redirect('/');
			}
			else
			{

				if (set_value('opinion') != NULL)
				{
					$data['opinion'] = set_value('opinion');
					$this -> thought_model -> add_opinion($data['opinion']);
				}
				else
				{
					redirect('/');
				}
			}

			$data['title'] = "Opinion Submitted: " . $data['opinion'];
			$data['pageload'] = 'pages/thoughts/submitted';
			$this -> load -> vars($data);
			$this -> load -> view('template');

		}

	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */
