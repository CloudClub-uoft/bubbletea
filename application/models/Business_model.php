<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Business_model extends CI_Model
{
	public $name;
	public $address;
	public $notes;
	public $website;
	public $stars;
	public $reviews;

	private $table = 'business';

	public function __construct()
	{
		$this->load->database();
	}

	public function get_ten_random_entries()
	{
		$query = $this->db->query("SELECT * FROM `business` ORDER BY RAND() LIMIT 10;");
		return $query->result();
	}

	public function paginated($limit = 0)
	{
		$this->db->limit($limit);
		$this->db->offset($this->uri->segment(3));
		return $this->db->get($this->table)->result();
	}
}
