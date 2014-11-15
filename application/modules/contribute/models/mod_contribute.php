<?php

class mod_contribute extends CI_Model {

    public function findAll() {
        $this->db->select('*');
        $this->db->where(field('pag_status'), 1);
        $this->db->from(table('tbl_page'));
        return $this->db->get();
    }

}

?>
