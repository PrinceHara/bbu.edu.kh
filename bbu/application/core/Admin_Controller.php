<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{

    // Site global layout
    public $layout_view = 'dashboard/layout';
    public $limit;
    public $config_pagination;
    
    public function __construct()
    {
        parent::__construct();
        $this->limit = 20;

        $this->config_pagination['per_page'] = $this->limit;
        $this->config_pagination['use_page_numbers'] = TRUE;
        $this->config_pagination['cur_tag_open'] = '<li class="paginate_button active"><a>';
        $this->config_pagination['cur_tag_close'] ='</a></li>';

        $this->config_pagination['num_tag_open'] = '<li class="paginate_button ">';
        $this->config_pagination['num_tag_close'] ='</li>';

        $this->config_pagination['first_tag_open'] = '<li class="paginate_button ">';
        $this->config_pagination['first_tag_close'] ='</li>';

        $this->config_pagination['last_tag_open'] = '<li class="paginate_button ">';
        $this->config_pagination['last_tag_close'] ='</li>';

        $this->config_pagination['next_tag_open'] = '<li class="paginate_button ">';
        $this->config_pagination['next_tag_close'] ='</li>';

        $this->config_pagination['prev_tag_open'] = '<li class="paginate_button ">';
        $this->config_pagination['prev_tag_close'] ='</li>';
        
        // Layout library loaded site wide
        $this->load->library('layout');

        // Site global resources
        $this->layout->meta('copyright', 'http://cambo25.com');
        $this->layout->meta('keywords', 'cambo25');
        //$this->layout->js('js/jquery.min.js');        
        //$this->layout->css('css/site.css');


        if($this->session->userdata('log_success')){
            if($this->session->userdata('log_success') == '1'){

            }else{
                redirect('login');
            }
        }else{
            redirect('login');
        }


    }

}
