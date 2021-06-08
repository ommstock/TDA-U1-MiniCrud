<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $user      = $this->input->post('user');
        $password   = $this->input->post('password');
        $data = array(
            'user' => $user,
            'id' => 30,
            'login' => FALSE
        );

        $this->session->set_userdata( $data );
        
        echo $this->session->userdata('id');
        
        
    }

}

/* End of file Login.php */
