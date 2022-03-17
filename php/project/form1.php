<?php

include 'connection.php';
?> 
<html>

<body>  

<form method="POST" action="form1_submit.php">  
  First Name: <input type="text" name="name">

  <br><br>
  Last Name: <input type="text" name="lastname">
  
  <br><br>

  Adress: <textarea name="adress" rows="3" cols="40"></textarea>
  <br><br>

  City: <input type="text" name="city">
 
  <br><br>
 
  Gender:
  <input type="radio" name="gender" value="male" required>Male
  <input type="radio" name="gender"  value="female">Female <br/><br/>
  
  Hobbies: 
           <input type="checkbox" name="hobbies" value="cricket"/>Cricket
              <input type="checkbox" name="hobbies" value="singing"/>Singing
            <input type="checkbox" name="hobbies" value="dancing"/>Dancing<br/><br/>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>

<?php

if( isset ($_POST['submit']))
{
$name= $_POST['name'];
$lastname= $_POST['lastname'];
$adress= $_POST['adress'];
$city= $_POST['city'];
$gender= $_POST['gender'];
//$hobbies= $_POST['hobbies'];
//$check= implode(",",$hobbies);

if($name!=""&& $lastname!="" && $adress!="" && $city!="" && $gender!="")
{

$sql= "INSERT INTO table1(name,lastname,adress,city,gender) 
VALUES ('$name','$lastname','$adress','$city','$gender')";
$data= mysqli_sql($conn,$sql);

if($data){

  echo "data insert successfuly";
}else{
  die("Connection failed: " . $conn->connect_error);
}
}
}
?>