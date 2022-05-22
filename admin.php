<?php
include "head.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Yat Admins</title>
    <link rel="icon" href="image/logo3.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="boot/jquery-3.5.1.js"></script>
    <script src="boot/js/bootstrap.js"></script>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-php.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="fonts/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="section">
  <div class="back">
    <div class="welcome"> welcome <?php echo $user;?></div>
  </div>
</div>
<div class="section">
  <div class="main">
      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
  <table class="admin-table">
      <caption>
          add data to database
      </caption>
      <tr>
          <th>add employees</th>
          <th>add departments</th>
          <th>add jobs</th>
          <th>add branch</th>
      </tr>
      <tr>
          <td class="emp" rowspan="2"><a href="employees.php">add employees</a></td>
          <td>
              <input type="text" id="dept" name="depart" placeholder="Enter Department" autocomplete="off">
        </td>
          <td>
              <input type="text" id="jobs" name="job" placeholder="Enter Job Title" autocomplete="off">
            </td>
          <td>
          <input type="text" id="branchs" name="branch" placeholder="Enter Branch Name" autocomplete="off">
        </td>
      </tr>
      <tr>
          <td colspan="3">
         <input type="submit" value="Add Data">
         <input type="reset" value="Reset"> 
            
          </td>
      </tr>

  </div>
  </div>
  </table>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yat";
    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        if ( empty($_POST['branch']) && empty($_POST['depart']) && empty($_POST['job'])){
            echo "<script>alert('Please Enter Department and Branch Name and Job Title');
            document.getElementById('dept').setAttribute('style','border-color:red');
            document.getElementById('jobs').setAttribute('style','border-color:red');
            document.getElementById('branchs').setAttribute('style','border-color:red');
            </script>";
        }
    
      else{
          $dept = trim($_POST['depart']);
          $job = trim($_POST['job']);
          $branch = trim($_POST['branch']);
          try{
              $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
              $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt1 = "INSERT INTO departments (dep_name) VALUES ('$dept')";
              $conn ->exec($stmt1);
              $stmt2 = "INSERT INTO jobs (job_title) VALUES ('$job')";
              $conn ->exec($stmt2);
              $stmt3 = $conn->prepare("INSERT INTO branch (branch_name) VALUES (?)");
              $stmt3 ->execute([$branch]);
          }
          catch(PDOException $e){
              echo "connection Failed " . $e->getMessage(); 
          }
      }
  }
  
    ?>
</form>
</body>
</html>
<?php
include "footer.php";
?>