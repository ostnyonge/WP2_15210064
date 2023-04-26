<?php
class m_buku extends CI_Model
{
    private $table = "buku";
    private $primary = "kd_buku";
    function tampilData()
    {
        if (empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary, 'asc');
        else
            $this->db->order_by();
        return $this->db->get($this->table);
        //SELECT * FROM buku ORDER BY kd_buku asc
    }
    function hapus($kd_buku)
    {
        $this->db->where($this->primary, $kd_buku);
        $this->db->delete($this->table);
        //DELETE FROM buku WHERE kd_buku = $kd_buku;
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}