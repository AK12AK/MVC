<?php
class model extends Database{
    public function modeladd($data){
      $first_name=$data[0];
      $last_name=$data[1];
      $email=$data[2];
      $Phone_number=$data[3];
      $street=$data[4];
      $city=$data[5];
      $state=$data[6];
      $country=$data[7];
      $zip=$data[8];
      $file=$data[9];
        // $this->query("INSERT INTO Emp_table(First_name,Last_name,Email,Phone_no,Street,City,State,Country,Zip)
        // VALUES('$first_name','$last_name','$email','$Phone_number','$street','$city','$state','$country','$zip')");
        try {
          $this->query("INSERT INTO Emp_table(First_name,Last_name,Email,Phone_no,Street,City,State,Country,zip,Photo)
            VALUES('$first_name','$last_name','$email','$Phone_number','$street','$city','$state','$country','$zip','$file')");
            //  $this->execute();
            //  print_r($this);
            //  print_r($first_name,$last_name,$email,$Phone_number,$street,$city,$state,$country,$zip,$file);
             $this->execute();
        }
        catch (exception $e) {
             return $e;
        } 
    }

    public function modeldisplay(){
     
        try {
            $this->query("SELECT * FROM Emp_table");
             $data =   $this->resultSet();
               return $data;
          }
          catch (exception $e) {
               return $e;
          } 
      }

    public function modeldelete($id){
        try {
    
            $this->query("DELETE FROM Emp_table WHERE Employee_id =$id");
             $data = $this->single();
               return $data;
          }
          catch (exception $e) {
               return $e;
          } 
      
    }
    public function modeledit($id){
        try {
            $this->query("SELECT * FROM Emp_table where Employee_id =$id ");
            $data = $this->single();
            //  print_r($data);
            return $data; 
          }
          catch (exception $e) {
               return $e;
          } 
      
    }
    public function findEmail($id)
    {
      $this->query("SELECT * FROM Emp_table where Email ='$id' ");
            return $this->single();

    }


    public function modeleditsave($data){
        try {
         
            $Emp_id=($data[0]);
            $first_name=($data[1]);
            $last_name=($data[2]);
            $email=($data[3]);
            $Phone_number=($data[4]);
            $street=($data[5]);
            $city=($data[6]);
            $state=($data[7]);
            $country=($data[8]);
            $zip=$data[9];
            // $photo=("null");
            $this->query("UPDATE Emp_table SET First_name ='$first_name',Last_name ='$last_name',Email ='$email',Phone_no ='$Phone_number',Street='$street',City ='$city',State ='$state',Country ='$country',zip ='$zip' WHERE Employee_id = '$Emp_id'");
            // print_r($this);
            // // $this->query("SELECT * FROM Emp_table");
            // $pol=$this->resultSet();
            // print_r($pol);
            $this->execute();
            return "data saved";
          }
          catch (exception $e) {
               return $e;
               print_r($e);
          } 
    }
     public function modelguestdisplay(){
     
        try {
            $this->query("SELECT * FROM Emp_table");
             $data =   $this->resultSet();
               return $data;
          }
          catch (exception $e) {
               return $e;
          } 
      }

      public function modelsearch(){
          $name = $_POST['inputname'];
        //   print_r($name);
        //   exit;
          $this->query("select * from Emp_table where First_name LIKE '%$name%'");
          return $this->resultSet();

    }
    
}
?>