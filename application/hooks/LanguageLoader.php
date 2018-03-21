<?php

/**
 * 2018
 * Desenvolvido por: Maurício Antonioli Schmitz
 * Analista de TI da Faculdade de Odontologia
 */
class LanguageLoader {

    function initialize() {
        $ci = & get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');

        if ($siteLang) {
            $ci->lang->load("error", $siteLang);
            $ci->lang->load("labels", $siteLang);
            $ci->lang->load("message", $siteLang);
        } else {
            $ci->lang->load("error", "pt-BR");
            $ci->lang->load("labels", "pt-BR");
            $ci->lang->load("message", "pt-BR");
        }
    }

}
