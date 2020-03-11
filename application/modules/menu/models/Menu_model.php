<?php

class Menu_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_MENU')->result_array();
    }
    public function createData($data)
    {
        $this->db->insert('TBL_MENU', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('MENU_ID', $id);
        $this->db->update('TBL_MENU', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('MENU_ID', $id);
        $this->db->delete('TBL_MENU');
    }
    var $column_order = array(null, 'MENU_NAMA', NULL, NULL, 'MENU_STATUS');
    var $column_search = array('MENU_NAMA');
    var $order = array('MENU_ID' => 'asc');
    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('TBL_MENU');
        $i = 0;
        foreach ($this->column_search as $item) {
            if (@$_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables()
    {
        $this->_get_datatables_query();
        if (@$_POST['length'] != -1)
            $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all()
    {
        $this->db->from('TBL_MENU');
        return $this->db->count_all_results();
    }
}
