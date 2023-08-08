<?php

class Blog extends CI_Controller {

    public function index()
    {
        // echo "Masuk Index Blog";
        // $data['blogs'] = [
        //     [
        //         "tittle" => "Artikel Pertama",
        //         "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolore odit quod eveniet maiores corrupti quasi natus omnis nostrum, animi voluptas quisquam sed dolorum ex soluta sapiente eius provident sunt?.</p>"
        //     ],
        //     [
        //         "tittle" => "Artikel Kedua",
        //         "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolore odit quod eveniet maiores corrupti quasi natus omnis nostrum, animi voluptas quisquam sed dolorum ex soluta sapiente eius provident sunt?.</p>"
        //     ],
        //     [
        //         "tittle" => "Artikel Ketiga",
        //         "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolore odit quod eveniet maiores corrupti quasi natus omnis nostrum, animi voluptas quisquam sed dolorum ex soluta sapiente eius provident sunt?.</p>"
        //     ]
        // ];
        // $this->load->model('Blog_model');
        $this->load->database();
        $query=$this->db->query();
        

        // $this->load->view('blog',$data);
    }
}