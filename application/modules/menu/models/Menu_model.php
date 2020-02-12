<?php

class Menu_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_MENU')->result_array();
    }
}
