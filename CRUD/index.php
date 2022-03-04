<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD operation</title>

<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"> 
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Name -->
      <div class="form-group">
    <label for="completename">Name</label>
    <input type="text" class="form-control" id="completename" placeholder="Enter your name">
  
  </div>
<!-- email -->
  <div class="form-group">
    <label for="completeemail">E-mail</label>
    <input type="text" class="form-control" id="completeemail" placeholder="Enter your email">
  
  </div>
  <!-- phone -->
  <div class="form-group">
    <label for="completephone">Phone</label>
    <input type="number" class="form-control" id="completephone" placeholder="Enter your phone number">
  
  </div>
  
  <!-- Adress -->
  <div class="form-group">
    <label for="completeadress">Adress</label>
    <input type="text" class="form-control" id="completeadress" placeholder="Enter your adress">
  
  </div>
  <!-- city -->
  
  <div class="form-group">
    <label for="completecity">City</label>
    <input type="text" class="form-control" id="completecity" placeholder="Enter your city">
  
  </div>
  <!-- pincode -->
  <div class="form-group">
    <label for="completepincode">Pincode</label>
    <input type="number" class="form-control" id="completepincode" placeholder="Enter your pincode">
  
  </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-dark"  onclick="adduser()">ADD</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

     <!-- Edit Model -->

     <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Name -->
      <div class="form-group">
    <label for="updatename">Name</label>
    <input type="text" class="form-control" id="updatename" placeholder="Enter your name">
  
  </div>
<!-- email -->
  <div class="form-group">
    <label for="updateemail">E-mail</label>
    <input type="text" class="form-control" id="updateemail" placeholder="Enter your email">
  
  </div>
  <!-- phone -->
  <div class="form-group">
    <label for="updatephone">Phone</label>
    <input type="number" class="form-control" id="updatephone" placeholder="Enter your phone number">
  
  </div>
  
  <!-- Adress -->
  <div class="form-group">
    <label for="updateadress">Adress</label>
    <input type="text" class="form-control" id="updateadress" placeholder="Enter your adress">
  
  </div>
  <!-- city -->
  
  <div class="form-group">
    <label for="updatecity">City</label>
    <input type="text" class="form-control" id="updatecity" placeholder="Enter your city">
  
  </div>
  <!-- pincode -->
  <div class="form-group">
    <label for="updatepincode">Pincode</label>
    <input type="number" class="form-control" id="updatepincode" placeholder="Enter your pincode">
  
  </div>
      </div>
      <div class="modal-footer">
      <button type="button"  class="btn btn-dark"  onclick="updateDetails()">Edit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
        <input type="hidden" id="hiddedata">
      </div>
    </div>
  </div>
</div>




<div class="container my-3">
<h1 class="text-center">CRUD operation</h1>
<button type="button" class="btn btn-dark my-3"  data-toggle="modal" data-target="#completeModal">
Add User
</button>
<div id="displayDataTable"></div>

</div>
<script>

$(document).ready(function(){
  displayData();

});

//display function
function displayData(){
    var displayData="true";
    $.ajax({
        url:"display.php",
        type:'post',
        date:{
            displaySend:displayData
        },
        success:function(data,status){

          $('#displayDataTable').html(data);
        }
    });
}

function adduser(){
 
   var nameAdd= $('#completename').val();
   var emailAdd= $('#completeemail').val();
   var phoneAdd= $('#completephone').val();
   var adressAdd= $('#completeadress').val();
   var cityAdd=   $('#completecity').val();
   var pincodeAdd= $('#completepincode').val();
   $.ajax({
    url:"insert.php",
    type:'post',
    data:{
        nameSend:nameAdd,
        emailSend:emailAdd,
        phoneSend:phoneAdd,
        adressSend:adressAdd,
        citySend:cityAdd,
        pincodeSend:pincodeAdd,
    },
      success:function(data,status){
       
       // console.log(status);
       $('#competeModal').modal('hide');
        displayData();
      }
   });
}

 //Delete record in table

 function DeleteUser(deleteid){

   $.ajax({
     url:"delete.php",
     type:'post',
     data:{
       deletesend:deleteid
     },
     success:function(data,status) {

      displayData();
       
     }
   });
 }

 //edit table

 function GetDetails(updateid) {

   $('#hiddendata').val(updateid);

    $.post("update.php",{updateid:updateid},function(data,status){

      var userid=JSON.parse(data);

      $('#updatename').val(userid.name);
      
      $('#updateemail').val(userid.email);
      
      $('#updatephone').val(userid.phone);
      
      $('#updateadress').val(userid.adress);
      
      $('#updatecity').val(userid.city);
      
      $('#updatepincode').val(userid.pincode);
    });

        $('#updateModal').modal("show");
   
 }

//onclick edit event function


  function updateDetails(){

    var updatename=$('#updatename').val();
    var updateemail=$('#updateemail').val();
    var updatephone=$('#updatephone').val();
    var updateadress=$('#updateadress').val();
    var updatecity=$('#updatecity').val();
    var updatepincode=$('#updatepincode').val();

    var hiddendata=$('#hiddendata').val();

    $.post("update.php",{
      updatename:updatename,
      updateemail:updateemail,
      updatephone:updatephone,
      updateadress:updateadress,
      updatecity:updatecity,
      updatepincode:updatepincode,

      hiddendata:hiddendata
    }, function(data,status){

      $('#updateModal').modal('hide');
      displayData();

    });
  }



</script>
</body>
</html>











