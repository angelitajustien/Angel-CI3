<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->model('Biodata');
		$data['biodata_array'] = $this->Biodata->getBiodataQueryArray();
		$data['biodata_object'] = $this->Biodata->getBiodataQueryObject();
		$data['biodatabuilder_array'] = $this->Biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object'] = $this->Biodata->getBiodataBuilderObject();
		$this->load->view('home',$data);
	}
	public function About()
	{
		$this->load->view('about');
	}
	public function Contact()
	{
		$this->load->view('contact');
	}
	public function News($nama=null)
	{
		if($nama == null){
			$nama = '<a href="'.base_url('News/Angelita').'">Pergi ke Halaman Berparameter</a>';
		}
		$data['nama']=$nama;
		$this->load->view('News',$data);
	}
}
