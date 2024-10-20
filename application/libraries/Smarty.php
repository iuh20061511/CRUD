<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// dẫn đúng vào đường dẫn file Smarty.class.php
require_once(APPPATH . 'third_party/smarty/libs/Smarty.class.php');

class CI_Smarty extends Smarty
{

    public function __construct()
    {
        parent::__construct();
        // Config đường dẫn
        $this->compile_dir = APPPATH . "views/templates_c";
        $this->template_dir = APPPATH . "views/templates";
        $this->config_dir = APPPATH . "views/config";
        $this->cache_dir = APPPATH . "cache";
        $this->assign('APPPATH', APPPATH);
        $this->assign('BASEPATH', BASEPATH);

        // Assign đối tượng CodeIgniter
        if (method_exists($this, 'assignByRef')) {
            $ci = &get_instance();
            $this->assignByRef("ci", $ci);
        }

        log_message('debug', "Smarty Class Initialized");
    }
    // Tạo 1 function view hoạt động giống như function view của CI_Controller
    function view($template, $data = array(), $return = FALSE)
    {
        foreach ($data as $key => $val) {
            $this->assign($key, $val);
        }

        if ($return == FALSE) {
            $CI = &get_instance();
            if (method_exists($CI->output, 'set_output')) {
                $CI->output->set_output($this->fetch($template));
            } else {
                $CI->output->final_output = $this->fetch($template);
            }
            return;
        } else {
            return $this->fetch($template);
        }
    }
    // Tạo 1 function gọi khi muốn sử dụng cache
    public function enable_caching()
    {
        $this->caching = 1;
    }
    // Tạo 1 function gọi khi NGƯNG sử dụng cache
    public function disable_caching()
    {
        $this->caching = 0;
    }
}
