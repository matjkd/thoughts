<?php

	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Babynames_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
		}

		function get_name($id)
		{
			$this -> db -> where('name_id', $id);
			$query = $this -> db -> get('babynames');
			if ($query -> num_rows == 1)
			{
				return $query -> result();
			}
		}

		function get_all_names()
		{
			$query = $this -> db -> get('babynames');
			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

		function get_random_id($sex)
		{
			$this -> db -> select('name_id');
			
			
				$this->db->where('sex', $sex);
			
			$this -> db -> order_by ('name_id', 'random');
			$this -> db -> limit (1);
			$query = $this -> db -> get('babynames');

			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

	}
