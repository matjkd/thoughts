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
			$query = $this -> db -> get('thoughts');
			if ($query -> num_rows == 1)
			{
				return $query -> result();
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
			$this -> db -> order_by ('id', 'random');
			$query = $this -> db -> get('thoughts');

			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

	}
