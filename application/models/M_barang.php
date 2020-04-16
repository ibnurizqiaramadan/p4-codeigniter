<?php

class M_barang extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "t_barang";
    }

    function getDataByQueryBuilder($where = null)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get()->result();
    }

    function getDataByQuery()
    {
        $query = $this->db->query("SELECT * FROM t_barang");      
        return $query->result();
    }

    function getDataByGet()
    {
        return $this->db->get($this->table)->result();
    }

    function FunctionName()
    {
        # code...
    }
}


?>