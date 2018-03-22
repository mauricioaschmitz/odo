<?php

/**
 * 2018
 * Desenvolvido por: Maurício Antonioli Schmitz
 * Analista de TI da Faculdade de Odontologia
 */
class Register_model extends CI_Model {

    function insert($dados) {
        $this->db->insert("pessoas", $dados);

        return $this->db->affected_rows();
    }

    function checkCpf($cpf) {
        $this->db->select("cpf");
        $this->db->from("pessoas");
        $this->db->where("cpf", $cpf);
        $query = $this->db->get();

        return $query->result();
    }

}
