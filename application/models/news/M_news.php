<?php

class M_news extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getNews($slug = FALSE)
    {
        if ($slug != FALSE) {
            $data = $this->db->get_where('t_news', array('slug' => $slug));
        } else {
            $data = $this->db->get('t_news');
        }
        return $data;
    }

    public function getNewsByID($id)
    {
        $data = $this->db->get_where('t_news', array('md5(id)' => $id))->row();
        return $data;
    }


    public function insertNews($data)
    {
        $this->db->insert('t_news', $data);
        if ($this->db->affected_rows() > 0) {
            redirect(base_url('news'));
        }
    }

    public function editNews($data, $id)
    {
        $this->db->where('md5(id)', $id);
        $this->db->update('t_news', $data);
        if ($this->db->affected_rows() > 0) {
            redirect(base_url('news'));
        }
    }

    public function deleteNews($id)
    {
        $this->db->where('md5(id)', $id);
        $this->db->delete('t_news');
        if ($this->db->affected_rows() > 0) {
            redirect(base_url('news'));
        }
    }
}
