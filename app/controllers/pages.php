<?php
  class Pages extends Controller{

    private $ClientServiceImp;
    private $db;
    public function __construct(){
      $this->db = new Database;
      $this->ClientServiceImp = $this->services('ClientServiceImp');
    
    }
    
    public function index(){
    
     
      $this->view('pages/index');
    }

    public function clients(){
      $data = $this->ClientServiceImp->getAllClients();
      $this->view('pages/client', $data);

    }
    public function assurence() {
      $this->view('pages/assurence');
    }
    public function article() {
      $this->view('pages/article');
    }

    public function claim() {
      $this->view('pages/claim');
    }

    public function prime() {
      $this->view('pages/prime');
    }

 



  
  }