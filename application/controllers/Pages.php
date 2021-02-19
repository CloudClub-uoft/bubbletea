<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	private $limit = 10;

	public function index($productID = 0)
	{
		$this->load->model('business_model');
		$stuff = $this->business_model->get_ten_random_entries();
		$title['stuff'] = $stuff;

		$this->load->view('templates/header');
		$this->load->view('pages/home', $title);
		$this->load->view('templates/footer');
	}

	public function all($page = 'data')
	{		
	
		$this->load->model('business_model', 'business');
		$stuff = $this->business->paginated($this->limit);
		$total_rows = $this->db->count_all_results('business');		

		$this->load->helper('app');
		$pagination_links = pagination($total_rows, $this->limit);				

		$this->load->view('templates/header');
		$this->load->view('pages/show_all', ['links' => $pagination_links, 'stuff' => $stuff]);
		$this->load->view('templates/footer');		
	}
	public function about($page = 'about')
	{
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');		
		return;
	}
}
