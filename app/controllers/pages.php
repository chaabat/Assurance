<?php
  class Pages extends Controller{

   
    private $db;
      
    public function index(){
    
     
      $this->view('pages/index');
    }

    //********Affichage********//

    public function clients(){
      $db = new Database();
      $clientService = new ClientServiceImp($db);
      $data = $clientService->getAllClients();
      $this->view('pages/client', $data);

    }
    public function assurence() {
      $db = new Database();
      $clientService = new AssureServiceImp($db);
      $data = $clientService->getAllAssurence();
      $this->view('pages/assurence', $data);
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

 //**********Delete**************//
public function deleteClient() {
  
    $id = $_GET["id"];

    $db = new Database();
    $clientService = new ClientServiceImp($db);
    try{
       
      $clientService->removeClient($id);
      header("Location:".URL_ROOT."/pages/clients");

    }
    catch(PDOException $e){
        die($e->getMessage());
    
}
}

public function removeAssurence() {
  
  $id = $_GET["id"];

  $db = new Database();
  $clientService = new AssureServiceImp($db);
  try{
     
    $clientService->removeAssurence($id);
    header("Location:".URL_ROOT."/pages/assurence");

  }
  catch(PDOException $e){
      die($e->getMessage());
  
}
}



  
  }