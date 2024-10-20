<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/m_users_table', 'users_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login_post()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->users_model->login($username, $password);
        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            redirect('users');
        } else {
            $this->session->set_flashdata('error', 'Sai tên đăng nhập hoặc mật khẩu');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('/login');
    }
}
