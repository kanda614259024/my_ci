<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insertdata extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('member_model');
        }

	public function index()
	{
		$data['query']=$this->member_model->showdata();
 
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
		$this->load->view('insert_view2');
		$this->load->view('member_view', $data);
		$this->load->view('footer');
		$this->load->view('js');
		}

	public function edit($my_id)
	{
		$data['rsedit']=$this->member_model->read($my_id);
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
		$this->load->view('edit_view',$data);
		$this->load->view('footer');
		$this->load->view('js');
		}
	public function adding()
	{
		$this->member_model->addmember();
		
	}	
	public function adding2()
	{
		$this->member_model->addmember2();
		redirect('','refresh');
		
	}	
	public function editdata()
	{
		
		$this->member_model->editmember();
		redirect('','refresh');
		
	}
	public function del($my_id)
	{

		$this->member_model->deldata($my_id);
		redirect('','refresh');
	}		
}