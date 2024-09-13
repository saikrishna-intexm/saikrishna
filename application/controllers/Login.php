<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('leads/login_view');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Fixed login credentials
        $fixedUsername = 'admin'; // Change as needed
        $fixedPassword = 'DBaccess2!'; // Change as needed

        if ($username === $fixedUsername && $password === $fixedPassword) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);
            redirect('leads');
        } else {
            $this->session->set_flashdata('error_message', 'Invalid credentials');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
