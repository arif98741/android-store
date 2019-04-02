<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('security');
    }

    /*
    !--------------------------------------------------------
    !       404 Page
    !--------------------------------------------------------
    */
    public function index()
    {
       
        $data['users'] = $this->db->get('tbl_user')->result_object();

        $this->load->view('public/lib/header');
        $this->load->view('errors/cli/error_404');
        $this->load->view('public/lib/footer');
        
    }

    
}