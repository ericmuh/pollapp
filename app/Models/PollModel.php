<?php

namespace App\Models;
use CodeIgniter\Model;

class PollModel extends Model{
    public function get_poll_question() {
        // code to retrieve poll question from the database
        $query = $this->db->get('polls');
        return $query->row()->question;
    }

    protected $table = 'polls';

    // Function to get polls
    public function getPolls()
    {
        return $this->findAll();
    }

    public function submit_vote($option_id) {
        // code to submit vote to the database
        $data = array(
            'option_id' => $option_id,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('poll_votes', $data);
    }

    public function get_results() {
        // code to retrieve poll results from the database
        $query = $this->db->query('SELECT poll_options.name, COUNT(poll_votes.option_id) as votes, (COUNT(poll_votes.option_id) / (SELECT COUNT(*) FROM poll_votes)) * 100 as percentage FROM poll_options LEFT JOIN poll_votes ON poll_options.id = poll_votes.option_id GROUP BY poll_options.id');
        return $query->result_array();
    }
}
