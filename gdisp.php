
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
    td{
        padding:10px;

    }
    </style>
</head>
<body>
<?php
include("gconn.php");
error_reporting(0);
$query = "SELECT * FROM student_tb";
$data  =  mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0){
?>
   <table>
   <tr>
   <th>ID</th>
   <th>FIRSTNAME</th>
   <th>LASTNAME</th>
   <th>DATE OF BIRTH</th>
   <th>EMAIL</th>
   <th>MOBILE</th>
   <th>COURSE</th>
   </tr>
<?php
   while($result = mysqli_fetch_assoc($data))
   {
       echo "
       <tr>
       <td>".$result[id]."</td>
       <td>".$result[firstname]."</td>
       <td>".$result[lastname]."</td>
       <td>".$result[dateofbirth]."</td>
       <td>".$result[email]."</td>
       <td>".$result[mobile]."</td>
       <td>".$result[course]."</td>
         </tr>
         ";
   }  
   echo "“Registration information has been successfully submitted into Database. Following
   is the list of students registered till now:”";
   echo "<br>";
   echo "<br>";
   echo "<br>";

}
   else{
       echo "No record found";
     }
?>
       </table>
</body>
</html>