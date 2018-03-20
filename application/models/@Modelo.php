<?php

/**
* 2018
* Desenvolvido por: Maurício Antonioli Schmitz
* Analista de TI da Faculdade de Odontologia
*/

class nome_arquivo_php_sem_extensao extends CI_Model{
    function name() {
        $this->db->select("*");
        $this->db->from("table");
        $query = $this->db->get();

        return $query->result();
    }
}
