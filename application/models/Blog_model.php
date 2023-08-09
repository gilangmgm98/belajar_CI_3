<?php

class Blog_model extends CI_Model
{

    public function getBlogs()
    {
        $filter = $this->input->get('find');
        if($filter){
            $this->db->like('title', $filter);
            $query = $this->db->get('blog');
            $data['blogs'] = $query->result_array();
            return $data;
        }else{
            $query = $this->db->get('blog');
            $data['blogs'] = $query->result_array();
            return $data;
        }
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

    public function deleteArtikel($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }
}