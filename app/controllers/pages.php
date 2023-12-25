<?php
  class Pages extends Controller{
    public function __construct(){
  

    }
    
    public function index(){
    
     
      $this->view('pages/index');
    }

    public function clients(){
      $this->view('pages/clients');

    }
    public function Assurence() {
      $this->view('pages/assurence');
    }

  
  }