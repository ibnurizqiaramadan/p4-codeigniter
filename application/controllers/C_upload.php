<?php 

class C_upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('directory');
        $this->load->library('session');
    }

    public function index()
    {
        if (isset($_POST['uploadGan'])) {
            $config = [
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|jpeg|png',
                'max_size' => '200000'
            ];
            $this->load->library('upload', $config);
            if ($this->upload->do_upload()) {
                $this->session->set_flashdata('msg', "success");
            } else {
                $this->session->set_flashdata('msg', 'fail');
            }
            $map = directory_map('./uploads/', FALSE, TRUE);
            $data = array(
                'title' => "Upload File",
                'files' => $map
            );
            $this->load->view('v_upload', $data);
        } else {
            $map = directory_map('./uploads/', FALSE, TRUE);
            $data = array(
                'title' => "Upload File",
                'files' => $map
            );
            $this->load->view('v_upload', $data);
        }
    }
}
