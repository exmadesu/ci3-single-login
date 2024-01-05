<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('parser');
  }

  public function index()
  {
    $this->parser->parse('blank', [
      'title' => 'About',
      'content' => 'About Page'
    ]);
  }

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
