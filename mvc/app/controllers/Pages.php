<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
  
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function login()
    {
     
      
      // $User_name=$_POST['name'];
      // $Password=$_POST['password'];
      if(($_POST["usrname"])== usrname &&($_POST["usrpassword"]==usrpassword))
      { 
        // print_r('iam sucess'); 
        $_SESSION['name']='Admin';
      $this->view('pages/login');
      }
      else
      {
        // print_r('iam failed'); 

        $data = [
          'ttt' => 'invalid!'
        ];
        // print_r($data);
        // exit;
        $this->view('pages/index',$data);
     
      }
    }
    public function add()
    {
   
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $Phone_number=$_POST['Phone_number'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $country=$_POST['country'];
      $zip=$_POST['zip'];
     
      // $file=$_FILES['file'];
      // $images_dir='../public/img/';
      $images_file=$_FILES['file']['name'];
      $data=[ $first_name,$last_name,$email,$Phone_number,$street, $city,$state,$country,$zip,$images_file];
      move_uploaded_file($_FILES['file']['tmp_name'],'../public/img/'.$images_file);
     
      // move_uploaded_file($_FILES["file"]["tmp_name"],$images_file);
      $modal=$this->model('model');
      $Model1=$modal->findEmail($email);
      if(!$Model1)
      {
        $modal=$this->model('model');
        $Model1=$modal->modeladd($data);
        $this->view('pages/login');
      }
      else
      {
        $_SESSION['emailError'] = "email already exist";
        $this->view('pages/login');
     

      }
      // $data = [];
    
    }
    public function display(){

      if(isset($_SESSION['name']))
      {
        $modal=$this->model('model');
        $Model1=$modal->modeldisplay();
        $this->view('pages/display',$Model1);
      }
      else
      {
        $this->view('pages/index');
      }
    

    }
    public function delete($id)
    {
      // $id = $_GET['Employee_id'];
      $modal = $this->model('model');
      $model1=$modal->modeldelete($id);
     $Model1=$modal->modeldisplay();
      $this->view('pages/display',$Model1);
      
    }
    
    public function edit($id)
    {
       
      $modal = $this->model('model');
      $model1=$modal->modeledit($id); 
      $this->view('pages/editform',$model1);
     
    }

    public function editsave()
    {
     
      $id = $_POST['id'];
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $Phone_number=$_POST['Phone_number'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $country=$_POST['country'];
      $zip=$_POST['zip'];
      $file=$_FILES['file'];
      $data=[$id,$first_name,$last_name,$email,$Phone_number,$street,$city,$state,$country,$zip,$file];
      $modal = $this->model('model');
      $model1=$modal->modeleditsave($data);
      $Model1=$modal->modeldisplay();
      $this->view('pages/display',$Model1);
    }
    public function guestdisplay(){
      $modal=$this->model('model');
      $Model1=$modal->modelguestdisplay();
      $this->view('pages/guestdisplay',$Model1);

    }
    public function search()
    {
      $models=$this->model('model');
      $model1=$models->modelsearch($_POST);

      // print_r($data);
      // exit;
      // if($data){
      //   $data=["posts"=>$data];
      $this->view('pages/display',$model1);
      }

      public function logout()
      {
        session_unset();
        session_destroy();
        $this->view('pages/index');
      }
      public function login1(){
        $this->view('pages/login');
      }
    }
    
  