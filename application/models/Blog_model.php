<?php

class Blog_model extends CI_Model
{

    public function getBlogs()
    {
        return $this->db->get('blog');
    }

    public function getDetailBlog($field, $value)
    {
        $this->db->where($field, $value);
        return $this->db->get('blog');
    }

    public function addArtikel($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }

    public function editArtikel($id, $data)
    {
        $this->db->where('id',$id);
        $this->db->update('blog', $data);
        return $this->db->affected_rows();
    }
}