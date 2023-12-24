<?php
  class Pages extends Controller {
    public function __construct(){
      $this->postModel = $this->model('Post');

    }
    
    public function index(){
   
     
      $this->view('pages/index');
    }

    public function clients(){
      $this->view('pages/clients');

    }

    public function assurence(){
      $this->view('pages/assurence');
    }
  }