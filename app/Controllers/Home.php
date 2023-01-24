<?php

namespace App\Controllers;
use App\Models\PollModel;


class Home extends BaseController
{
    public function index()
    {
        $pollModel = new PollModel();
        $data['polls'] = $pollModel->getPolls();
        return view('home_view', $data);
    }

    public function vote()
    {
        $option_id = $this->request->getPost('option');
        $pollModel = new PollModel();
        $pollModel->submitVote($option_id);
        return redirect()->to('poll/results');
    }

    public function results()
    {
        $pollModel = new PollModel();
        $data['results'] = $pollModel->getResults();
        return view('poll_results_view', $data);
    }
}
