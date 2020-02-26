<?php

class Kewenangan_model extends CI_Model
{
    public function readData()
    {
        $this->db->select('*');
        $this->db->from('TBL_KEWENANGAN');
        $this->db->join('TBL_MENU', 'TBL_MENU.MENU_ID = TBL_KEWENANGAN.MENU_ID');
        $this->db->join('TBL_GRUP', 'TBL_GRUP.GRUP_ID = TBL_KEWENANGAN.GRUP_ID');
        return $this->db->get()->result_array();
    }
    public function readNamaMenu()
    {
        $this->db->select('MENU_NAMA, MENU_ID');
        $this->db->from('TBL_MENU');
        return $this->db->get()->result_array();
    }
    public function readKewenangan()
    {
        return $this->db->query("SELECT TBL_GRUP.GRUP_NAMA, TBL_GRUP.GRUP_DISKRIPSI, TBL_GRUP.GRUP_ID  from TBL_KEWENANGAN join TBL_GRUP ON TBL_GRUP.GRUP_ID = TBL_KEWENANGAN.GRUP_ID GROUP BY TBL_GRUP.GRUP_NAMA, TBL_GRUP.GRUP_DISKRIPSI, TBL_GRUP.GRUP_ID;")->result_array();
    }

    public function readNamaGrup()
    {
        $this->db->select('GRUP_NAMA, GRUP_ID');
        $this->db->from('TBL_GRUP');
        return $this->db->get()->result_array();
    }
    public function createData($data)
    {
        $this->db->insert('TBL_KEWENANGAN', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('KEWENANGAN_ID', $id);
        $this->db->update('TBL_KEWENANGAN', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('KEWENANGAN_ID', $id);
        $this->db->delete('TBL_KEWENANGAN');
    }
    public function readMenu($GRUP_ID)
    {
        return $this->db->query("SELECT TBL_MENU.MENU_NAMA, TBL_MENU.MENU_LINK FROM TBL_KEWENANGAN, TBL_GRUP, TBL_MENU WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=TBL_MENU.MENU_ID")->result_array();
    }
    var $column_order = array(null, 'GRUP_NAMA', 'MENU_NAMA');
    var $column_search = array('GRUP_NAMA', 'MENU_NAMA');
    var $order = array('KEWENANGAN_ID' => 'asc');
    private function _get_datatables_query()
    {
        $GRUP = $this->input->post('id');
        $this->db->select('*');
        $this->db->from('TBL_KEWENANGAN');
        $this->db->join('TBL_MENU', 'TBL_MENU.MENU_ID = TBL_KEWENANGAN.MENU_ID');
        $this->db->join('TBL_GRUP', 'TBL_GRUP.GRUP_ID = TBL_KEWENANGAN.GRUP_ID');
        $this->db->where('TBL_GRUP.GRUP_ID ', $GRUP);
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
        $GRUP = $this->input->post('id');
        $this->db->select('*');
        $this->db->from('TBL_KEWENANGAN');
        $this->db->join('TBL_MENU', 'TBL_MENU.MENU_ID = TBL_KEWENANGAN.MENU_ID');
        $this->db->join('TBL_GRUP', 'TBL_GRUP.GRUP_ID = TBL_KEWENANGAN.GRUP_ID');
        $this->db->where('TBL_GRUP.GRUP_ID ', $GRUP);
        return $this->db->count_all_results();
    }
}
