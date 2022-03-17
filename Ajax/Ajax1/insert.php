<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

if(isset($_POST["name"]))
{
 $skill = implode(", ", $_POST["skill"]);

 $data = array(
  ':programmer_name'  => $_POST["name"],
  ':programmer_skill'  => $skill
 );

 $query = "
 INSERT INTO programmer 
 (programmer_name, programmer_skill) 
 VALUES (:programmer_name, :programmer_skill)
 ";

 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  echo '
  <div class="alert alert-success">
   Data Successfully Inserted
  </div>
  ';
 }
}
?>
