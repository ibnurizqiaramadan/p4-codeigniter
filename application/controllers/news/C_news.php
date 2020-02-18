<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_news extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('news/M_news');
    }

    public function index()
    {
        $data = array(
            'news' => $this->M_news->getNews()->result(), 
            'content' => 'news/v_index'
        );
        $this->load->view('news/template', $data);
    }

    public function viewNews($slug)
    {
        $data = array(
            'news' => $this->M_news->getNews($slug)->row(),
            'content' => 'news/v_view'
        );
        $this->load->view('news/template', $data);
    }

    public function createNews()
    {
        $data = array(
            'content' => 'news/v_create'
        );
        $this->load->view('news/template', $data);
    }

    public function editNews()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'content' => 'news/v_edit',
            'data' => $this->M_news->getNewsByID($id)
        );
        $this->load->view('news/template', $data);
    }

    public function store()
    {
        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug
        );
        $this->M_news->insertNews($data);
    }

    public function storeEdit()
    {
        $id = url_title($this->input->post('id'));
        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug
        );
        $this->M_news->editNews($data, $id);
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->M_news->deleteNews($id);
    }

}


?>