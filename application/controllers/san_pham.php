<?php

class San_pham extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo base_url();
    }

    public function danhsach()
    {
        $this->load->model('san_pham/m_san_pham_table');
        $dssp = $this->m_san_pham_table->getSanPham();
        echo $dssp;
        echo 'ds';
    }

    public function them()
    {
        echo 'them';
    }

    public function capnhat($id)
    {
        echo 'cap nhat' . $id;
    }

    public function xoa($id)
    {
        echo 'xoa' . $id;
    }
}
