<?php

include 'conn.php';

if(isset($_POST['updateid'])){

    $user_id=$_POST[updateid];

    $sql="Select * from `crudphp` where id=$user_id";
    $result=mysqli_query($conn,$sql);

    $response=array();
    while($row=mysqli_fetch_assoc($result)){

        $response=$row;
    }

    echo json_encode($response);
}else{

    $response['status']=200;
    $response['message']="data not found";
}

   //update query

   if(isset($_POST['hiddendata'])){

    $uniqueid=$_POST['hiddendata'];
    $name=$_POST['updatename'];
    $emai=$_POST['updateemail'];
    $phone=$_POST['updatephone'];
    $adress=$_POST['updateadress'];
    $city=$_POST['updatecity'];
    $pincode=$_POST['updatepincode'];

     $sql="update `crudphp` set name='$name',email='$email',phone='$phone',adress='$adress',city='$city',pincode='$pincode' 
     where id=$uniqueid";

     $result=mysqli_query($conn,$sql);

   }



?>








