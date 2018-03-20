<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
	      $idioma = $this->session->get_userdata('language');
	      if (!(isset($idioma))){
            $idioma = "pt-BR";
        }
        switch ($idioma) {
            case 'en-US': //Caso seja inglês
                $this->lang->load("error", "en-US");
                $this->lang->load("labels", "en-US");
                $this->lang->load("message", "en-US");
                break;
            default:
                $this->lang->load("error", "pt-BR");
                $this->lang->load("labels", "pt-BR");
                $this->lang->load("message", "pt-BR");
                break;
        }
        //se está na página de login
        if (get_class($this) == 'Login'){
            //se estiver na página de login não faz nada
        }
		    else {
            //se não está logado redireciona para o login
    			  if (!($this->session->userdata('logged_in'))){
    				    redirect(base_url('index.php/login'));
            }
  		  }
    }
}
