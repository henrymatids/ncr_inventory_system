<?php

class MY_Controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function loadPages(
      $bodyLink,
      $headerLink,
      $footerLink,
      $bodyScriptLink = false,
      $data = array()
    ) {
      $this->load->view($headerLink, $data);
      $this->load->view($bodyLink);
      $this->load->view($footerLink);
      if($bodyScriptLink){
       $this->load->view($bodyScriptLink);
      }
    }
}
