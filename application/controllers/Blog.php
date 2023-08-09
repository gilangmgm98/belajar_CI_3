<?php

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }

    public function index()
    {
        $query = $this->Blog_model->getBlogs();
        ;
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        // $query = $this->db->query("SELECT * FROM blog WHERE url = '$url'");

        $query = $this->Blog_model->getDetailBlog('url', $url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = str_replace(' ', '-', strtolower($data['title']));
            // print_r($data);

            $id = $this->Blog_model->addArtikel($data);

            if ($id) {
                echo "Data Berhasil Disimpan";
            } else {
                echo "Data Gagal Disimpan";
            }
        }

        $this->load->view('form_add');
    }

    public function edit($id)
    {
        $query = $this->Blog_model->getDetailBlog('id',$id);
        $data['blog'] = $query->row_array();

        if ($this->input->post()) {
            $value['title'] = $this->input->post('title');
            $value['content'] = $this->input->post('content');
            $value['url'] = str_replace(' ', '-', strtolower($value['title']));
            // print_r($value);

            $id = $this->Blog_model->editArtikel($id, $value);

            if ($id) {
                echo "Data Berhasil Disimpan";
            } else {
                echo "Data Gagal Disimpan";
            }
        }

        $this->load->view('form_edit', $data);
    }
}