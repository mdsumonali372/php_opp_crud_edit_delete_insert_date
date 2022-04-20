<?php 

Class User{
    // database connection
    public function __construct(){
       $serverhost  = 'localhost';
       $dbuser      = 'root';
       $dbpass      = '';
       $dbname      = 'oppcrud';
       $this->conn  =  mysqli_connect($serverhost, $dbuser, $dbpass, $dbname);
    }

    public function information($data){
        $username  = isset($data['username']) ? $data['username'] : NULL;
        $email     = isset($data['email']) ? $data['email'] : NULL;
        $upassword = isset($data['password']) ? $data['password'] : NULL;
        
        $usersqli  = "INSERT INTO student(username, email, password) VALUES ('$username', '$email', '$upassword')";

       $final1 =  mysqli_query($this->conn, $usersqli);

        if($final1){
            echo "success";
        }else{
            echo "wrong";
        }
  
    }

    public function viewdata(){
        $viewsql  = "SELECT * FROM student";
    
        return mysqli_query($this->conn, $viewsql);
    }
  

    // delete method
    public function deletedata($dlt){
        $dltdata   = "DELETE FROM student WHERE ID = '$dlt' ";

        mysqli_query($this->conn,$dltdata);
        header('Location: view.php');
    }

    // edit data
    public function editdata($eid){
        $edtit  = "SELECT * FROM student WHERE ID = '$eid'";

        return mysqli_query($this->conn, $edtit);

    }

    // up data

    public function update($update){
        $a  = $update['ID'];
        $b  = $update['username'];
        $c  = $update['email'];
        $d  = $update['password'];


        $updatesql  = "UPDATE student SET username='$b', email='$c', password='$d' WHERE ID ='$a'";

        mysqli_query($this->conn, $updatesql);

        header('Location: view.php');
    }


   
}




?>