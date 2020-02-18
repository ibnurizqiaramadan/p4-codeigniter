<?php 

class M_pesan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "t_pesan";
    }

    public function getBarang()
    {
        return $this->db->get('t_barang');
    }

    public function getBarangByKode($kode)
    {
        return $this->db->get_where('t_barang', array('kode' => $kode));
    }

    public function getPesanan()
    {
        $this->db->select('t_pesan.id, kode_barang, nama, jumlah_pem, total_pem');
        $this->db->from($this->table);
        $this->db->join('t_barang', 'kode_barang = kode');
        return $this->db->get();
    }

    public function getPesananById($id)
    {
        $this->db->select('t_pesan.id, kode_barang, nama, jumlah_pem, total_pem');
        $this->db->from($this->table);
        $this->db->where('md5(t_pesan.id)', $id);
        $this->db->join('t_barang', 'kode_barang = kode');
        return $this->db->get();
    }
}
