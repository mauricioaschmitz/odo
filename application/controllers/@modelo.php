<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class nome_arquivo_php_sem_extensao extends MY_Controller {

    /**
     * 2018
     * Desenvolvido por: Maurício Antonioli Schmitz
     * Analista de TI da Faculdade de Odontologia
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('nome_do_arquivo_pasta_model_sem_extensao');
        //title for page
        $this->data['title'] = $this->lang->line('title');
        //if want to hide footer, send footerHide = true
        $this->data['footerHide'] = 'false';
        //if want to hide menu, send menuHide = true
        $this->data['menuHide'] = 'false';
        //if want to insert another file in the header
        $this->data['headerOption'] = "<link rel='stylesheet' href=" . base_url() . "includes/path/file.css>" . "\xA" .
                "\t\t<script src=" . base_url() . "includes/path/file.js></script>" . "\xA";
    }

    public function index() {
        $this->load->template('nome_do_arquivo_pasta_view_sem_extensao', $this->data);
    }

}
