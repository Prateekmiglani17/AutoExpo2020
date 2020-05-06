<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'student1';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
   
$First_name=$_POST['First_name'];;  
$Last_name=$_POST['Last_name'];;  
$Email_Id=$_POST['Email_Id'];;
$contact_no=$_POST['contact_no'];;
$sql="INSERT INTO autoform (First_name,Last_name,Email_Id,contact_no) VALUES ('$First_name', '$Last_name','$Email_Id','$contact_no')";
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  