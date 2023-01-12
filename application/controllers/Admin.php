<?php

class Admin Extends CI_Controller{
    public function index()
    {
        $this->load->view('admin/form_login');
    }
}