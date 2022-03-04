<?php

include 'conn.php';

if(isset($_POST['deletesend'])){

    $unique=$_POST['deletesend'];

    $sql="delete from `crudphp` where id=$unique";
    $result=mysqli_query($conn,$sql);
}


?>