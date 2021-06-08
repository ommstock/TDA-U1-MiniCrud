<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Model
{

    public function get_post()
    {
        $result = $this->db->get('post');
        return $result->result();
    }
    public function get_post_by_name($name = '')
    {
        // $result = $this->db->query("SELECT * FROM post WHERE post = '".$name."' ");
        $this->db->select('post');
        $this->db->from('post');
        $this->db->where('post', $name);
        $result = $this->db->get();
        return $result->row();
    }
    public function get_post_by_id($id)
    {
        $this->db->select("*");
        $this->db->from('post');
        $this->db->where('id', $id);
        $result = $this->db->get();
        return $result->row();
    }
}

/* End of file Post.php */
