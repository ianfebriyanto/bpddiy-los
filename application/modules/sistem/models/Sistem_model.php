<?php

class Sistem_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_SISTEM')->result_array();
    }
    public function createData($data)
    {
        $this->db->insert('TBL_SISTEM', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('SISTEM_ID', $id);
        $this->db->update('TBL_SISTEM', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('SISTEM_ID', $id);
        $this->db->delete('TBL_SISTEM');
    }
    var $column_order = array(null, 'SISTEM_NAMA', NULL, 'SISTEM_VERSI');
    var $column_search = array('SISTEM_NAMA');
    var $order = array('SISTEM_ID' => 'asc');
    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('TBL_SISTEM');
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
        $this->db->from('TBL_SISTEM');
        return $this->db->count_all_results();
    }
}
