<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/m_users_table', 'users_model');
    }

    public function index() {}

    public function add()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|min_length[5]', array(
            'required' => 'Bạn phải nhập tên đăng nhập.',
            'min_length' => 'Tên đăng nhập phải có ít nhất 5 ký tự.'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
            'required' => 'Bạn phải nhập email.',
            'valid_email' => 'Địa chỉ email không hợp lệ.'
        ));
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]', array(
            'required' => 'Bạn phải nhập mật khẩu.',
            'min_length' => 'Mật khẩu phải có ít nhất 6 ký tự.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('users/add');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );
            $this->users_model->addUser($data);
            //redirect('user');
        }
    }
}
