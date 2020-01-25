<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends My_Controller {
	
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	public function add_tournament()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/Sidebar/add_tournament');
		$this->load->view('admin/footer');
	}
	public function my_tournaments()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/Sidebar/my_tournaments');
		$this->load->view('admin/footer');
	}
	
	public function my_matches()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/Sidebar/my_matches');
	}
	
	public function layouts()
	{
		$this->load->view('admin/sidebar/top-nav');
	}
	public function layoutstopside()
	{
		$this->load->view('admin/sidebar/top-nav-sidebar');
	}
	public function ChartJs()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/chartjs');
		$this->load->view('admin/footer');
	}
	public function Flot()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/flot');
	}
	public function Inline()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/inline');
	}
	public function DataTable()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/data');
		$this->load->view('admin/footer');
	}
	
	public function Calendarr()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/calenderr');
	}
	public function gallery()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/gallery');
		$this->load->view('admin/footer');
	}
	
	public function MailInbox()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/mailinbox');
		$this->load->view('admin/footer');
	}
	public function MailCompose()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/mailcompose');
	}
	public function MailRead()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/mailread');
		$this->load->view('admin/footer');
	}
	
	public function Profile()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/profile');
		$this->load->view('admin/footer');
	}
	public function Projects()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/projects');
		$this->load->view('admin/footer');
	}
	public function Contact()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar/contacts');
		$this->load->view('admin/footer');
	}
	
}
