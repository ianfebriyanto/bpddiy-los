<?php

class Sistem_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_SISTEM')->result_array();
    }
}
