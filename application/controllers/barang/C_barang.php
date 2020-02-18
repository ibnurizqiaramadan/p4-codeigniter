<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pesan');
    }

    public function index()
    {
        $data = array(
            'pesanan' => $this->M_pesan->getPesanan()->result(),
            'content' => 'barang/v_index'
        );
        $this->load->view('barang/template', $data);
    }

    public function pesan()
    {
        $data = array(
            'barnag' => $this->M_pesan->getBarang()->result(),
            'content' => 'barang/v_create'
        );
        $this->load->view('barang/template', $data);
    }

    public function checkout()
    {
        $kode = $this->input->post('kode');
        $barang = $this->M_pesan->getBarangByKode($kode)->row();
        $jml = $this->input->post('jumlah');
        $data = array(
            'barang' => $barang,
            'jml' => $jml,
            'total' => $barang->harga * $jml,
            'content' => 'barang/v_checkout'
        );
        $this->load->view('barang/template', $data);
    }

    public function store()
    {
        $data = array(
            'kode_barang' => $this->input->post('kode'),
            'jumlah_pem' => $this->input->post('jumlah'),
            'total_pem' => $this->input->post('total'),
        );
        $this->db->insert('t_pesan', $data);
        redirect(base_url('barang'));
    }

    public function editStore()
    {
        $data = array(
            'kode_barang' => $this->input->post('kode'),
            'jumlah_pem' => $this->input->post('jumlah'),
            'total_pem' => $this->input->post('total'),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('t_pesan', $data);
        redirect(base_url('barang'));
    }

    public function delete()
    {
        $this->db->where('md5(id)', $this->uri->segment('2'));
        $this->db->delete('t_pesan');
        redirect(base_url('barang'));
    }

    public function edit()
    {
        $id = $this->uri->segment('2');
        $pesanan = $this->M_pesan->getPesananById($id)->row();
        $barang = $this->M_pesan->getBarangByKode($pesanan->kode_barang)->row();
        $data = array(
            'id' => $pesanan->id,
            'barang' => $barang,
            'harga' => $barang->harga,
            'jml' => $pesanan->jumlah_pem,
            'total' => $pesanan->total_pem,
            'content' => 'barang/v_edit'
        );
        $this->load->view('barang/template', $data);
    }
}


?>