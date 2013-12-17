<?php

	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Thought_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
		}

		function get_thought($id)
		{
			$this -> db -> where('id', $id);
			$this -> db -> where('valid', 1);
			$query = $this -> db -> get('thoughts');
			if ($query -> num_rows == 1)
			{
				return $query -> result();
			}
			else {
				return 1;
			}
		}

		function get_all_thoughts()
		{
			$query = $this -> db -> get('thoughts');
			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

		function get_random_id()
		{
			$this -> db -> select('id');
			$this -> db -> order_by('id', 'random');
			$this -> db -> limit(1);
			$query = $this -> db -> get('thoughts');

			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

		function add_opinion($opinion)
		{
			$new_opinion = array(
				'thought' => $opinion,
				'valid' => 0
			);
			
			$this->db->insert('thoughts', $new_opinion);
			
			return TRUE;

		}

	}
