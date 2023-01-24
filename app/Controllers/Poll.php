<?php

class Poll extends CI_Controller {
    public function index() {
        // load the model
        $this->load->model('Poll_model');
        // get poll question and options
        $data['poll_question'] = $this->Poll_model->get_poll_question();
        $data['poll_options'] = $this->Poll_model->get_poll_options();
        // load the view to display the question and options
        $this->load->view('poll_question_view', $data);
    }

    public function vote() {
        // get the option id from the form submission
        $option_id = $this->input->post('option');
        // load the model
        $this->load->model('Poll_model');
        // submit the vote
        $this->Poll_model->submit_vote($option_id);
        // redirect to the results page
        redirect('poll/results');
    }

    public function results() {
        // load the model
        $this->load->model('Poll_model');
        // get the results
        $data['results'] = $this->Poll_model->get_results();
        // load the view to display the results
        $this->load->view('poll_results_view', $data);
    }
}
