<?php

include 'conn.php';


  if(isset($_POST['displaySend']))
   {

    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Adress</th>
        <th scope="col">City</th>
        <th scope="col">Pincode</th>
        <th scope="col">Action</th>
      </tr>
    </thead>';
  }
    $sql="Select * from `crudphp`";
    $result=mysqli_query($conn,$sql);
     $number=1; 
    while($row = mysqli_fetch_assoc($result))
    {

        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $adress=$row['adress'];
        $city=$row['city'];
        $pincode=$row['pincode'];

        $table.='<tr>

        <td scope="row">'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$adress.'</td>
        <td>'.$city.' </td>
        <td>'.$pincode.'</td>
        <td>
        <button class="btn btn-dark" onclick ="GetDetails('.$id.')> Edit</button>
        <button class="btn btn-danger" onclick ="DeleteUser('.$id.')">Delete</button>
    </td>


      </tr>';
    
      $number++;
    }

    $table.='</table>';
    echo $table;
  
?>
   
  



