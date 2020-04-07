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
        $this->load->library('calendar');
        $data["varkal"]=$this->calendar->generate();
        $data["judulapp"]="Kalender dengan judul Library Calendar";
        $this->load->view("v_kalender",$data);
    }
    public function hariBesar()
    {
        $this->load->library('calendar');
        $tahun=2020;
        $bulan='05';
        $aharibesar=array(02=>base_url()."kalender/infohari/$tahun/$bulan/02");
        $data["varkal"]=$this->calendar->generate($tahun,$bulan,$aharibesar);
        $data["judulapp"]="Kalender Dengan Hari Besar!";
        $this->load->view("v_kalender",$data);
    }

    function infohari($tahun, $bulan, $tgl)
    {
        $ainfohari = array('20200421' => "Hari Kartini", '20200502' => "Hari Pendidikan Nasional");
        $data["infohari"] = $ainfohari[$tahun . $bulan . $tgl];
        $data["tahun"] = $tahun;
        $data["bulan"] = $bulan;
        $data["tgl"] = $tgl;
        $data["judulapp"] = "Info Hari Besar!";
        $this->load->view("v_haribesar", $data);
    }

    function show()
    {
        $prefs=array('show_next_prev'=>TRUE,'next_prev_url'=>site_url().'/kalender/show/');
        $this->load->library('calendar',$prefs);
        $data["varkal"]=$this->calendar->generate($this->uri->segment(3),$this->uri->segment(4));
        $data["judulapp"]="navigasi Kalender";
        $this->load->view("v_kalender",$data);
    }

}