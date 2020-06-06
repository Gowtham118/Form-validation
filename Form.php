<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Form.css">
    <title>Student admission Form</title>
</head>
<body>
    <div id="main">
        <div class="bg">
          <h2>Student Admission Form</h2>
          <img src="girl.png" alt="Loading...">
        </div>
    <form action="">
      <label for="">First Name:</label><input type="text" name="first" id=""><br>
    <label>Last Name: </label><input type="text" name="last" id=""><br>
     <label for="">Date of Birth:</label>   <input type="date" name="date" id=""><br>
     <label for="">Email: </label>  <input type="email" name="email" id=""><br>
     <label for="">Mobile Number: </label>  <input type="tel" name="phnno" id=""><br>
     <label for="">Course:</label> <select name="courses" id="">
            <option value="--select--">--select--</option>
            <option value="English">English</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Biology">Biology</option>
            </select> <br>
     <button type="submit" name="submit" >Submit</button>
    </form>
    </div>
    <?php
    include("gconn.php");
    
    ?>
        <?php
        $query1 = "CREATE TABLE student_tb(firstname VARCHAR(30),lastname VARCHAR(30),dateofbirth VARCHAR(12),email VARCHAR(40),mobile VARCHAR(15),course VARCHAR(12))";
        mysqli_query($conn,$query);
        if(isset($_POST['submit']))
        {
         $first = $_POST['first'];
         $last = $_POST['last'];
         $date=$_POST['date'];
         $email = $_POST['email'];
         $mobile=$_POST['phnno'];
         $course=$_POST['courses'];
    
         
           $query = "INSERT INTO student_tb (firstname,lastname,dateofbirth,email,mobile,course)
           VALUES ('$first','$last','$date','$email','$mobile','$course')" ;
           $data = mysqli_query($conn,$query);
           if($data){
               echo 'Success<br>';
    
           }
           else
           {
               echo 'Failed<br>';
           }
         
        }
    ?>
    <br>
<a href="gdisp.php">Click here </a>to see the database in form of table
</body>
</html>