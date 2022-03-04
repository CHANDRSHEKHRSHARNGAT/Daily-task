<?php

include 'conn.php';

extract($_POST);



if(isset($_POST['nameSend']) && isset($_POST['emailSend']) &&  isset($_POST['phoneSend']) &&  isset($_POST['adressSend']) && 
 isset($_POST['citySend'])  &&  isset($_POST['pincodeSend']) )

 
 {



    $sql="insert into `crudphp` (name,email,phone,adress,city,pincode) 
    values ('$nameSend','$emailSend','$phoneSend','$adressSend','$citySend','$pincodeSend')";
    

    $result=mysqli_query($conn,$sql);
    
}

?>