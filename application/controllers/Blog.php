<?php

class Blog extends CI_Controller
{
    public function index()
    {
        return $this->load->view('blog_index');
    }


    public function add()
    {
        echo "Add function of blog controller";
    }
}