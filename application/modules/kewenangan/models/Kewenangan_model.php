<?php

class Kewenangan_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_KEWENANGAN')->result_array();
    }
}
