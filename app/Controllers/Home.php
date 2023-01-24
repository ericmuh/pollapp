<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->load->model('Poll_model');
        $data['polls'] = $this->Poll_model->get_polls();
        $this->load->view('home_view', $data);
    }
}
