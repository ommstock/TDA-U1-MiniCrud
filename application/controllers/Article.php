<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('post');
    }

    // public function post($name = '')
    public function post($id = 1)
    {
        $fila = $this->post->get_post_by_id($id);
        
        $data = array('title' => $fila->post);
        $this->load->view('guest/head', $data);
        $data = array('app' => 'Blog');
        $this->load->view('guest/nav', $data);

        $data = array(
            'post' => $fila->post,
            'descripcion' => $fila->descripcion
        );
        $this->load->view('guest/header', $data);
        $data = array('contenido' => $fila->contenido);
        $this->load->view('guest/post', $data);

        $this->load->view('guest/footer');
        
        
   }
}

/* End of file Article.php */
