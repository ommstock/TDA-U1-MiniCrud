<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('post');
    }
    
    public function index()
    {
        $data = array('title' => 'Home', 'mensaje' => 'Bienvenido a mi pagina web con codeigniter',);
        $this->load->view('guest/head', $data);

        $data = array('app' => 'Blog');
        $this->load->view('guest/nav', $data);

        $data = array('post' => 'Blog', 'descripcion' => 'Bienvenido a mi pagina web om code igniter');
        $this->load->view('guest/header', $data);

        // $this->load->model('post');
        $data = array(
            'consulta' => $this->post->get_post(),
        );

        $this->load->view('guest/content', $data);

        $this->load->view('guest/footer');
    }
    public function acerca(){
        $data = array('title' => 'Acerca de');
        $this->load->view('guest/head', $data);

        $data = array('app' => 'Blog');
        $this->load->view('guest/nav', $data);

        $this->load->view('guest/acerca');

        $this->load->view('guest/footer');
    }
    public function contacto(){
        $data = array('title' => 'Contacto');
        $this->load->view('guest/head', $data);

        $data = array('app' => 'Blog');
        $this->load->view('guest/nav', $data);

        $this->load->view('guest/contacto');

        $this->load->view('guest/footer');
    }
}

/* End of file Home.php */
