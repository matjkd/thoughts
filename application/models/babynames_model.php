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
			$query = $this -> db -> get('names');
			if ($query -> num_rows == 1)
			{
				return $query -> result();
			}
		}

		function get_all_names()
		{
			$query = $this -> db -> get('names');
			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

		function like_name($id)
		{
			$name = $this -> get_name($id);
			foreach ($name as $row):

				$liked = $row -> likes;

			endforeach;

			$newlike = intval($liked) + 1;

			$likeupdate = array('likes' => $newlike);
			$this -> db -> where('name_id', $id);
			$update = $this -> db -> update('names', $likeupdate);
			return $update;

		}

		function dislike_name($id)
		{
			$name = $this -> get_name($id);
			foreach ($name as $row):

				$disliked = $row -> dislikes;

			endforeach;

			$newdislike = intval($disliked) + 1;

			$likeupdate = array('dislikes' => $newdislike);
			$this -> db -> where('name_id', $id);
			$update = $this -> db -> update('names', $likeupdate);
			return $update;
		}

		function get_random_id($sex)
		{
			$this -> db -> select('name_id');

			if ($sex != "n")
			{
				$this -> db -> where('sex', $sex);
			}

			$this -> db -> order_by('name_id', 'random');
			$this -> db -> limit(1);
			$query = $this -> db -> get('names');

			if ($query -> num_rows > 0)
			{
				return $query -> result();
			}
		}

	}
