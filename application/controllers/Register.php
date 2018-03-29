<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    /**
     * 2018
     * Desenvolvido por: Maurício Antonioli Schmitz
     * Analista de TI da Faculdade de Odontologia
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->library('Functions');
        //title for page
        $this->data['title'] = $this->lang->line('register');
        //if want to hide footer, send footerHide = true
        $this->data['footerHide'] = 'false';
        //if want to hide menu, send menuHide = true
        $this->data['menuHide'] = 'false';
        //if want to insert another file in the header
        $this->data['headerOption'] = "<script src=" . "'" . base_url() . "includes/js/inputmask/dist/jquery.inputmask.bundle.js'></script>" . "\xA"
                . "\t\t<script src=" . "'" . base_url() . "includes/js/inputmask/dist/inputmask/phone-codes/phone.js'></script>" . "\xA"
                . "\t\t<script src=" . "'" . base_url() . "includes/js/inputmask/dist/inputmask/bindings/inputmask.binding.js'></script>" . "\xA"
                . "\t\t<script src=" . "'" . base_url() . "includes/js/register.js'></script>" . "\xA";

        $this->data['sexo'] = '';
        $this->data['estadoCivil'] = '';
    }

    public function index() {
        $this->load->template('Register_view', $this->data);
    }

    public function insert() {
        if ($this->functions->validaCPF($this->input->post('cpf'))) {
            ///$this->data['teste'] = $this->input->post('dataNasc');
            //$dataNasc = $this->functions->formataDataBD($this->input->post('dataNasc'));
            $banco = array(
                'cpf' => $this->input->post('cpf'),
                'nome' => $this->input->post('nome'),
                'dataNasc' => $this->input->post('dataNasc'),
                'telefone' => $this->input->post('telefone'),
                'sexo' => $this->input->post('sexo'),
                'estadoCivil' => $this->input->post('estadoCivil'),
                'email' => $this->input->post('email'),
                'cep' => $this->input->post('cep'),
                'cidade' => $this->input->post('cidade'),
                'estado' => $this->input->post('estado'),
                'bairro' => $this->input->post('bairro'),
                'endereco' => $this->input->post('endereco'),
                'numero' => $this->input->post('numero'),
                'complemento' => $this->input->post('complemento'),
            );
            $this->data['teste'] = $this->Register_model->insert($banco);
        }
        $this->load->template('Register_view', $this->data);
        //redirect('index.php/register', 'refresh');
    }

    public function checkCpf() {
        $cpf = $this->input->post('cpf');
        $result = $this->Register_model->checkCpf($cpf);
        if ($result) {
            $this->session->set_userdata('id', $result->id);
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    public function uploadFile() {
        $config['upload_path'] = './uploads/' . $this->session->userdata('id');
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000; // 10 MB
        //$config['max_width'] = 1024;
        //$config['max_height'] = 768;
        $config['file_name'] = date("Y/m/d");

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('fileUpload')) {
            $this->data['teste'] = $this->upload->display_errors();

            $this->load->template('Register_view', $this->data);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }

}
