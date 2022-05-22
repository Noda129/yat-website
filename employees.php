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
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="fonts/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="section">
   <div class="back">
     <div class="welcome"> welcome <?php echo $user;?></div>
     <div class="return">
          <a href="admin.php">Admin Page</a>
   </div>
   </div>
  
</div>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "yat";
        try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "connection Failed " . $e->getMessage(); 
    }
        $stmt1 = $conn->query("SELECT * FROM jobs")->fetchAll(PDO::FETCH_KEY_PAIR);
        $stmt2 = $conn->query("SELECT * FROM departments")->fetchAll(PDO::FETCH_KEY_PAIR);
        $stmt3 = $conn->query("SELECT * FROM branch")->fetchAll(PDO::FETCH_KEY_PAIR);

    ?>
<div class="section">
  <div class="main">
      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
  <table class="emptable">
      <caption>
          add employees data
      </caption>
      <tr>
          <th>employee name :</th>
          <td > 
              <input type="text" name="employee" placeholder="Enter Employee name" autocomplete="off" required>
        </td>
     </tr>
     <tr>
          <th>job title :</th>
          <td>
          <select name="job" >
          <?php
             foreach($stmt1 as $key => $value){
               echo "<option value=\"" . $key . "\">" . $value . "</option>";
               }
           ?>
          </select>
         </td>
      </tr>
         <tr>
          <th>department :</th>
          <td>
          <select name="depart" >
          <?php
             foreach($stmt2 as $key => $value){
               echo "<option value=\"" . $key . "\">" . $value . "</option>";
               }
           ?>
          </select>
        </td>
     </tr>
        <tr>
          <th>branch :</th>
          <td>
          <select name="branch" >
          <?php
             foreach($stmt3 as $key => $value){
               echo "<option value=\"" . $key . "\">" . $value . "</option>";
               }
           ?>
          </select>
        </td>
        </tr>
        <tr>
          <th>salary :</th> 
          <td > 
              <input type="number" name="salary" >
        </td>
        </tr>
        <tr>
          <th>gender :</th>
          <td>
          <select name="gender" >
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          </select>
        </td>
        </tr>
        <tr>
          <th>national id :</th>
          <td > 
              <input type="number" name="national" >
         </td>
         </tr>
         <tr>
          <th>nationality :</th>
          <td > 
              <input type="text" name="nationality" >
        </td>
        </tr>
        <tr>
          <th>hire date :</th> 
          
        <td > 
              <input type="date" name="hiredate" >
        </td>
      </tr>
      <tr>
      <?php
         if( $_SERVER['REQUEST_METHOD'] == "POST"){
          $empname = trim($_POST['employee']);
          $jobtitle = $_POST['job'];
          $department = $_POST['depart'];
          $branhcname = $_POST['branch'];
          $salary =trim ($_POST['salary']);
          $gender = $_POST['gender'];
          $nationalid =($_POST['national']);
          $nation = trim($_POST['nationality']);
          $hdate = $_POST['hiredate'];
          $sql = $conn ->prepare("INSERT INTO employees (emp_name,job_id,dept_id,branch,salary,gender,national_id,nationality,hire_date)
           VALUES (?,?,?,?,?,?,?,?,?)");
           $sql->execute([$empname,$jobtitle,$department,$branhcname,$salary,$gender,$nationalid,$nation,$hdate]);
           echo "<script>alert('Data sent Successfully')</script>";
           }
                ?>
          <td colspan="2">
          <input  type="submit" value="Send" onclick="fsend()">
    
          <input type="reset" value="Reset">
       </td>
      </tr>

  </div>
</div>
  </table>
  <script type="text/javascript">
  

  </script>

</body>
</html>
<?php
include "footer.php";
?>