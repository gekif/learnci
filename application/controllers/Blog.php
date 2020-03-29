<?php

class Blog extends CI_Controller
{
    public function index()
    {
        $this->load->view('blog_index');

        $this->load->model('authentication');

        $data = $this->authentication->getData();

        print_r($data);
    }


    public function add()
    {
        echo "Add function of blog controller";
    }
}