<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administration_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function getAdministration()
	{
		$this->db->select('administration.*,users.*');
		$this->db->join('users', 'administration.a_user_id = users.userID', 'left');
		$query = $this->db->get('administration');
		return $query->result_array();

	}
		
	function getPostSearch($keywords = null, $limit = 10, $offset = 0)
	{
		$this->db->select('
			postID,
			postTitle,
			postExcerpt,
			postSlug,
			timestamp
		');
		$this->db->like('postTitle', $keywords);
		$this->db->or_like('postContent', $keywords);
		$this->db->or_like('tags', $keywords);
		$this->db->limit($limit, $offset);
		$query = $this->db->get('posts');
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
		else
		{
			return array();
		}
	}
		
	function getSnapshotSearch($keywords = null, $limit = 10, $offset = 0)
	{
		$this->db->select('
			snapshotID,
			snapshotContent,
			snapshotSlug,
			snapshotFile,
			timestamp
		');
		$this->db->like('snapshotContent', $keywords);
		$this->db->limit($limit, $offset);
		$query = $this->db->get('snapshots');
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
		else
		{
			return array();
		}
	}
}