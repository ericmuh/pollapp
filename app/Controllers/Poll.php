<?php
class Poll extends CI_Controller {
    public function index() {
        // code to display poll question and options
       
            $this->load->model('Poll_model');
            $data['poll_question'] = $this->Poll_model->get_poll_question();
            $data['poll_options'] = $this->Poll_model->get_poll_options();
            $this->load->view('poll_question_view', $data);
        
    }

    public function vote() {
        // code to handle vote submission
    }

    public function results() {
        // code to display poll results
    }
}
