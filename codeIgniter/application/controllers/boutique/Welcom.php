<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcom extends CI_Controller 
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('sublime/header');
		$this->load->view('sublime/index');
		$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}
	public function product()
	{
		$this->load->helper('url');
		$this->load->view('sublime/header');
		$this->load->view('sublime/product');
		$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}
	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('sublime/header');
		$this->load->view('sublime/contact');
		$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}
	public function panier()
	{
		$this->load->helper('url');
		$this->load->view('sublime/header');
		$this->load->view('sublime/cart');
		$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}
	public function register()
	{
		$this->load->helper('url');
		$this->load->view('sublime/header');
		$this->load->view('sublime/checkout');
		$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}
	public function categories()
	{
		$this->load->helper('url');
		$this->load->view('sublime/header');
		$this->load->view('sublime/categories');
		$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}	
	public function test()
	{
		$this->load->helper('url');
		//$this->load->view('sublime/header');
		$this->load->view('sublime/test');
		//$this->load->view('sublime/footer');
		$this->load->view('sublime/addjava');
	}	
}
