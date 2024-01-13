  <style>
    .input_delete{
          border-radius:5px;
          margin-top:15px;


    }

   </style>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD[-]Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>




</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#" style="margin-left:40px;">Daily Task Manager</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    </div>
  </nav>




  <div class="container my-4">
    <form action="project_php.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Task</label>
        <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Task Discription</label>
          <input type="text" name="dis" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-primary">Task Submit</button> 
        <br>
  </form>

    <form action="project_php.php" method="get">   
  <input type="number" placeholder="Enter the SNO" name="delete" class="input_delete" required>
  <button type="submit" class="btn btn-primary">Delete</button> 
    </form>

      </div>


  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">sno</th>
          <th scope="col">Task</th>
          <th scope="col">Discription</th>
        </tr>
      </thead>
      <tbody>
      <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "";
                   $database = "project";
                $conn = mysqli_connect($servername,$username,$password,$database);    
              $sql = "SELECT * FROM `project`";
              $result = mysqli_query($conn,$sql);
             
              while($row = mysqli_fetch_assoc($result))
              {
                echo " <tr>
                <td>".$row['sno']."</td>
                <td>".$row['task']."</td>
                <td>".$row['discription']."</td> 
                
              </tr>";
             
              }
              
              ?>
        
       
       
      </tbody>
      
    </table> 
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



</body>

</html>