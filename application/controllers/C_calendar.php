<?php 

class C_calendar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('text');
    }

    public function index()
    {
        error_reporting(0);
        $prefs = array('show_next_prev' => TRUE, 'next_prev_url' => base_url() . 'kalender');
        $this->load->library('calendar', $prefs);
        $tahun = ($this->uri->segment(2)) ? $this->uri->segment(2) : date('Y');
        $bulan = ($this->uri->segment(3)) ? $this->uri->segment(3) : date('m');
        $haribesar = array(
            '202005' => array(
                02 => base_url() . "kalender/infohari/$tahun/$bulan/02",
                11 => base_url() . "kalender/infohari/$tahun/$bulan/11"
            ),
            '202004' => array(
                21 => base_url() . "kalender/infohari/$tahun/$bulan/21",
                06 => base_url() . "kalender/infohari/$tahun/$bulan/06"
            )
        );
        $data = array(
            'varkal' => $this->calendar->generate($tahun, $bulan, $haribesar["$tahun$bulan"]),
            'judulapp' => "Kalender CodeIgniter"
        );
        $this->load->view("v_kalender", $data);
    }

    function infohari($tahun, $bulan, $tgl)
    {
        $ainfohari = array(
            '20200421' => "Hari Kartini", 
            '20200406' => "Hari Nelayan Indonesia",
            '20200502' => "Hari Pendidikan Nasional",
            '20200511' => "Hari Besar baru !"
        );
        $data = array(
            'infohari' => $ainfohari[$tahun . $bulan . $tgl], 
            'tanggal' => "$tgl-$bulan-$tahun",
            'judulapp' => "Info Hari Besar!"
        );
        $this->load->view("v_haribesar", $data);
    }

    public function pdf($tahun, $bulan, $tgl)
    {
        $ainfohari = array(
            '20200421' => "Hari Kartini",
            '20200406' => "Hari Nelayan Indonesia",
            '20200502' => "Hari Pendidikan Nasional",
            '20200511' => "Hari Besar baru !"
        );
        $data = array(
            'infohari' => $ainfohari[$tahun . $bulan . $tgl],
            'tanggal' => "$tgl-$bulan-$tahun",
            'judulapp' => "Info Hari Besar!"
        );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('v_pdf', $data);
    }

}