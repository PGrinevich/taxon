<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {


	public function lang($lang = 'english'){
		$langs = $this->config->item('app_langs');
		
		if( in_array($lang, $langs) ){
			if($_SERVER['HTTP_REFERER']){
				$this->session->set_userdata('lang', $lang);
				redirect( $_SERVER['HTTP_REFERER'] );
			}else{
				$this->session->set_userdata('lang', $lang);
				redirect( base_url() );
			}

		}else{
			log_message( 'error', 'Choosed does no exists language.' );
			show_error( "This language does not exist." );
		}
		
	}	

}
?>
