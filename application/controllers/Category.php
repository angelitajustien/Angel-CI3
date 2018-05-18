<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		// Load custom helper applications/helpers/MY_helper.php


		// Load semua model yang kita pakai
		$this->load->model('Blog_model');
		$this->load->model('Category_model');
	}


	public function create() 
	{
		// Judul Halaman
		$data['page_title'] = 'Buat Kategori Baru';

		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('cat_create', $data);
		} else {
			$this->Category_model->create_Category();
			redirect('Category');
		}
	}

	public function index() 
	{ 
		$data['cat_read'] = $this->Category_model->read_Category(); 
		$this->load->view('cat_read',$data); 
	}

	public function update($id) 
	{ 
  	$this->load->helper('form'); 
  	$this->load->library('form_validation'); 

  	// Form validasi untuk Nama Kategori 
  	$this->form_validation->set_rules( 
   	'cat_name', 
   	'Nama Kategori', 
   	'required|is_unique[categories.cat_name]', 
   	array( 
    'required' => 'Isi %s donk, males amat.', 
    'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.' 
   	) 
  	); 
  	$data['cat_update'] = $this->Category_model->read_Category($id)[0]; 
  	if($this->form_validation->run() === FALSE){ 
  
   	$this->load->view('cat_update', $data); 
   
  	}  
  	else { 
   	$this->Category_model->update_Category($id); 
   	redirect('Category'); 
  	} 
 	} 
 	public function delete($id) 
 	{ 
  	$this->Category_model->delete_Category($id); 
  	redirect('Category'); 
 	}

}