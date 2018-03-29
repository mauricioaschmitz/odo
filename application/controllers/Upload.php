<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

    /**
     * 2018
     * Desenvolvido por: Maurício Antonioli Schmitz
     * Analista de TI da Faculdade de Odontologia
     */
    public function __construct() {
        parent::__construct();

        //title for page
        $this->data['title'] = "Teste";
        //if want to hide footer, send footerHide = true
        $this->data['footerHide'] = 'false';
        //if want to hide menu, send menuHide = true
        $this->data['menuHide'] = 'false';
        $this->data['error'] = '';
        
    }

    public function index() {
        $this->load->template('upload_form', $this->data);
    }
    
    public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']            = 'mauricio';

                //$this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $this->data['error'] = $this->upload->display_errors();

                        $this->load->template('upload_form', $this->data);
                }
                else
                {
                        $this->data['upload_data'] = $this->upload->data();

                        $this->load->template('upload_success', $this->data);
                }
        }

}
