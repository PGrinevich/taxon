<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();

		/* Loading configs */
		$this->config->load('taxon_settings');
		
		/* Loading lang pack  */
		$user_lang = $this->session->userdata('lang');
		if($user_lang){
			$this->lang->load('registration', $user_lang);
			$this->lang->load('general',      $user_lang);
		}else{
			$this->lang->load('registration', $this->config->item( 'default_lang' ));
			$this->lang->load('general',      $user_lang);
		}
		
	}

	/**
	 * Sing up index page
	 */
	public function index(){
		$data['layout'] = 'registration/index.view.php';
		$data['page_title'] = $this->lang->line('title_registration');
		$this->load->view('layouts/layout', $data);
	}

	/**
	 * Sing Up for companies
	 */
	public function company(){

		$data['layout'] = 'registration/company.view.php';
		$data['page_title'] = $this->lang->line('title_registration_company');
		$this->load->view('layouts/layout', $data);
	}

	/**
	 * Sing Up for users
	 */
	public function user(){

	}
	/**
	 * Sing Up for chiefs
	 */
	public function chief(){
		
	}
}
?>