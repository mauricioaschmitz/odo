<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    /**
     * 2018
     * Desenvolvido por: Maurício Antonioli Schmitz
     * Analista de TI da Faculdade de Odontologia
     */
    public function __construct() {
        parent::__construct();
        //$this->load->model('Login_model');
        //title for page
        $this->data['title'] = $this->lang->line('login');
        //if want to hide footer, send footerHide = true
        $this->data['footerHide'] = 'false';
        //if want to hide menu, send menuHide = true
        $this->data['menuHide'] = 'false';
                $this->data['headerOption'] = "<script src=" . "'" . base_url() . "includes/js/inputmask/dist/jquery.inputmask.bundle.js'></script>" . "\xA"
                . "\t\t<script src=" . "'" . base_url() . "includes/js/inputmask/dist/inputmask/phone-codes/phone.js'></script>" . "\xA"
                . "\t\t<script src=" . "'" . base_url() . "includes/js/inputmask/dist/inputmask/bindings/inputmask.binding.js'></script>" . "\xA";
    }

    public function index() {
        $this->load->template('Login_view', $this->data);
    }

    public function login() {
        // read the form fields, lowercase the username for neatness
        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password');

        // check the login
        if ($this->auth_ad->login($username, $password)) {
            // the login was succesful, do your thing here
            // upon a succesful login the session will automagically contain some handy user data:
            // $this->session->userdata('cn') contains the common name from the AD
            // $this->session->userdata('username') contains the username as processed
            // $this->session->userdata('dn') contains the distinguished name from the AD
            // $this->session->userdata('logged_in') contains a boolean (true)
            redirect(base_url('index.php/welcome'));
        } else {
            // user could not be authenticated, whoops.
            $this->data['error'] = $this->lang->line('login_error');
            $this->load->template('Login_view', $this->data);
            //redirect(base_url('index.php/login'));
        }
    }

    public function logout() {
        // perform the logout
        if ($this->session->userdata('logged_in')) {
            $data['name'] = $this->session->userdata('cn');
            $data['username'] = $this->session->userdata('username');
            $data['logged_in'] = true;
            $this->auth_ad->logout();
            redirect(base_url('index.php/login'));
        } else {
            $data['logged_in'] = false;
        }

        // now that the logout is done, you can add code for the next step(s) here
    }

    public function checkloginstatus() {
        // check if the user is already logged in
        if (!$this->auth_ad->is_authenticated()) {
            // not logged in, do what you need to do here
            // you could, for example, send the user to the login form
        } else {
            // already logged in, forward to the home page or some such
        }
    }

    public function useringroup() {
        // check if the user is a member of a particular group (recursive search)
        if ($this->auth_ad->in_group($username, $groupname)) {
            // the user is a member of the group
        } else {
            // nope, not a member
        }
    }

}
