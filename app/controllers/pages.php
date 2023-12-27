<?php



class Pages extends Controller
{


  private $db;

  public function __construct()
  {
    $this->db = new Database;

  }

  public function index()
  {


    $this->view('pages/index');
  }

  //********Affichage********//

  public function clients()
  {
    $clientService = new ClientServiceImp($this->db);
    $data = $clientService->getAllClients();
    $this->view('pages/client', $data);


  }
  public function assurence()
  {

    $clientService = new AssureServiceImp($this->db);
    $data = $clientService->getAllAssurence();
    $this->view('pages/assurence', $data);

  }
  public function article()
  {

    $clientService = new ArticleServiceImp($this->db);
    $data = $clientService->getAllArticle();
    $this->view('pages/article');
  }

  public function claim()
  {
    $this->view('pages/claim');
  }

  public function prime()
  {
    $this->view('pages/prime');
  }

  //**********Delete**************//
  public function deleteClient()
  {

    $id = $_GET["id"];


    $clientService = new ClientServiceImp($this->db);
    try {

      $clientService->removeClient($id);
      header("Location:" . URL_ROOT . "/pages/clients");

    } catch (PDOException $e) {
      die($e->getMessage());

    }
  }

  public function deleteAssurence()
  {

    $id = $_GET["id"];


    $clientService = new AssureServiceImp($this->db);
    try {

      $clientService->removeAssurence($id);
      header("Location:" . URL_ROOT . "/pages/assurence");

    } catch (PDOException $e) {
      die($e->getMessage());

    }
  }
  public function deleteArticle()
  {
    $id = $_GET["id"];


    $clientService = new ArticleServiceImp($this->db);
    try {

      $clientService->removeArticle($id);
      header("Location:" . URL_ROOT . "/pages/article");

    } catch (PDOException $e) {
      die($e->getMessage());

    }


  }



  //*********Ajouter ***********/
  public function addClient()
  {

    $clientService = new ClientServiceImp($this->db);


    $clients = $clientService->getAllClients();

    $data = [
      "error" => "",
      "clients" => $clients
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $nom = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $adress = $_POST["adress"];


      $newClient = new Client();
      $newClient->setNom($nom);
      $newClient->setPrenom($prenom);
      $newClient->setAdress($adress);

      try {

        $clientService->addClient($newClient);
        $clients = $clientService->getAllClients();
        $data["clients"] = $clients;
        header("Location: " . URL_ROOT . "/pages/clients");

      } catch (PDOException $e) {

        $data["error"] = "Error adding client: " . $e->getMessage();
      }
    }


  }


  public function addAssereur()
  {

    $assureurService = new AssureServiceImp($this->db);


    $assureur = $assureurService->getAllAssurence();

    $data = [
      "error" => "",
      "assureur" => $assureur
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nom = $_POST["nom"];
      $adress = $_POST["adress"];


      $logoFileName = $_FILES["logo"]["name"];
      $logoTmpName = $_FILES["logo"]["tmp_name"];


      $uploadDirectory = "path/to/your/upload/directory/";


      $targetFilePath = $uploadDirectory . $logoFileName;
      move_uploaded_file($logoTmpName, $targetFilePath);

      $newAssur = new Assurence();
      $newAssur->setNom($nom);
      $newAssur->setAdress($adress);
      $newAssur->setLogo($targetFilePath);

      try {
        $assureurService->addAssurence($newAssur);
        $assureur = $assureurService->getAllAssurence();
        $data["clients"] = $assureur;
        header("Location: " . URL_ROOT . "/pages/assurence");
      } catch (PDOException $e) {
        $data["error"] = "Error adding client: " . $e->getMessage();
      }
    }


  }

  //**********Update************/


  public function editClient()
  {
    ob_start();

    $clientservi = new ClientServiceImp($this->db);
    $client = $clientservi->getClientById($_GET['id_client']);
    $data = [
      'client' => $client
    ];
    $this->view("pages/editClient", $data);

    if (isset($_POST['submit'])) {
      $update = [
        'nom' => $_POST['nom'],
        'id' => $_POST['id'],
        'prenom' => $_POST['prenom'],
        'adress' => $_POST['adress'],
      ];


      $updateClient = new Client();
      $updateClient->setIdClient($update['id']);
      $updateClient->setNom($update['nom']);
      $updateClient->setPrenom($update['prenom']);
      $updateClient->setAdress($update['adress']);

      $clientservi->updateClient($updateClient);

      header('Location:' . URL_ROOT . '/pages/clients');
      exit();

    }
    $data = [
      'nom' => '',
      'prenom' => '',
      'adress' => '',
      'client' => ''
    ];

    $this->view("pages/editClient", $data);
    ob_end_flush();
  }

  public function editAssurance()
  {
    ob_start();

    $clientservi = new AssureServiceImp($this->db);
    $assurance = $clientservi->getAssurencetById($_GET['id_assureur']);
    $data = [
      'assurence' => $assurance
    ];
    $this->view("pages/editAssurance", $data);

    if (isset($_POST['submit'])) {
      $update = [
        'nom' => $_POST['nom'],
        'id_assureur' => $_POST['id_assureur'],
        'adress' => $_POST['adress'],
      ];


      $updateAssurance = new Assurence();
      $updateAssurance->setIdAssureur($update['id_assureur']);
      $updateAssurance->setNom($update['nom']);
      $updateAssurance->setAdress($update['adress']);

      $clientservi->updateAssurence($updateAssurance);

      header('Location:' . URL_ROOT . '/pages/assurence');
      exit();

    }
    $data = [
      'nom' => '',
      'adress' => '',
      'assurence' => ''
    ];

    $this->view("pages/editAssurance", $data);
    ob_end_flush();
  }





}

















