<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends MY_Controller {

    /**
     * 2018
     * Desenvolvido por: Maurício Antonioli Schmitz
     * Analista de TI da Faculdade de Odontologia
     */
    public function __construct() {
        parent::__construct();
        //$this->load->model('Image_model');
        //title for page
        $this->data['title'] = $this->lang->line('image');
        //if want to hide footer, send footerHide = true
        $this->data['footerHide'] = 'false';
        //if want to hide menu, send menuHide = true
        $this->data['menuHide'] = 'false';
        //if want to insert another file in the header
        $this->data['headerOption'] = "\t\t<script src=" . base_url() . "includes/js/Images.js></script>";
    }

    public function index() {        
        $this->load->template('Image_view', $this->data);
    }

}
