
<?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
       $task = $_POST['task'];
       $dis = $_POST['dis'];
   
       $servername = "localhost";
       $username = "root";
       $password = "";
       $database = "project";
   
       $conn = mysqli_connect($servername,$username,$password,$database);
       $sql = "INSERT INTO `project` (`task`, `discription`) VALUES ('$task', '$dis')";
              $result = mysqli_query($conn,$sql);   

               }

               if($_SERVER['REQUEST_METHOD']=='GET')
               {

                $delete= $_GET['delete'];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "project";
            
                $conn = mysqli_connect($servername,$username,$password,$database);


                
                $sql= "DELETE FROM `project` WHERE `project`.`sno` = $delete";
                $result=mysqli_query($conn,$sql);    
               }

               header("Location:project.php");
            
?>



