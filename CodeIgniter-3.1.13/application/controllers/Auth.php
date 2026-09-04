<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('form-login');
    }

    public function proses() {
        $data['user'] = array(
            'nama'          => $this->input->post('nama', TRUE),
            'email'         => $this->input->post('email', TRUE),
            'password'      => $this->input->post('password', TRUE),
            'no_hp'         => $this->input->post('no_hp', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE)
        );
            
        $this->load->view('hasil-login', $data);
    }
}