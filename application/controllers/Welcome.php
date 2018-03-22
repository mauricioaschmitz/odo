<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    /**
     * 2018
     * Desenvolvido por: Maurício Antonioli Schmitz
     * Analista de TI da Faculdade de Odontologia
     */
    public function __construct() {
        parent::__construct();
        //$this->load->model('Welcome_model');
        //title for page
        $this->data['title'] = 'Odonto';
        //if want to hide footer, send footerHide = true
        $this->data['footerHide'] = 'false';
        //if want to hide menu, send menuHide = true
        $this->data['menuHide'] = 'false';
    }

    public function index() {
        $this->load->template('Welcome_view', $this->data);
    }

}
