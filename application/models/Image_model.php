<?php

/**
 * 2018
 * Desenvolvido por: Maurício Antonioli Schmitz
 * Analista de TI da Faculdade de Odontologia
 */
class Image_model extends CI_Model {

    function checkName($name) {
        $this->db->like('pessoas', $name);
        $query = $this->db->get();

        return $query->result();
    }

}
