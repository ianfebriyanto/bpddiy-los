<?php

class User_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_USER')->result_array();
    }
}
