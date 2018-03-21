<?php

/**
 * 2018
 * Desenvolvido por: Maurício Antonioli Schmitz
 * Analista de TI da Faculdade de Odontologia
 */
class LanguageSwitcher extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    function switchLang($language) {
        $language = ($language != "") ? $language : "pt-BR";
        $this->session->set_userdata('site_lang', $language);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
