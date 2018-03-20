<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	/**
	* 2018
	* Desenvolvido por: Maurício Antonioli Schmitz
	* Analista de TI da Faculdade de Odontologia
	*/

public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
	{
            //title for page
            $data['title'] = $this->lang->line('register');
            //if want to hide footer, send footerHide = true
            $data['footerHide'] = 'false';
            //if want to hide menu, send menuHide = true
            $data['menuHide'] = 'false';

						$data['sexo'] = '';
						$data['estadoCivil'] = '';

            $this->load->template('Register_view', $data);
	}
}
