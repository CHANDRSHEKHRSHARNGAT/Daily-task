
<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=testing4", "root", "");
function fill_unit_select_box($connect)

{ 
 $output = '';
 $query = "SELECT * FROM tbl_unit ORDER BY unit_name ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["unit_name"].'">'.$row["unit_name"].'</option>';
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body> 
  <br />
  <div class="container">
   <h3 align="center">Grocery store</h3>
   <br />
   <h4 align="center">Enter Item Details</h4>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Enter Item Name</th>
       <th>Enter Quantity</th>
       <th>Select Unit</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add">
           <span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
     </div>
    </div>
    <br><br>
    </form>
    <!----display table--->

  <div class="container">
  <h3 align="center">Grocery Item Details</h3><br>
  <?php

  $sql ="Select * from tbl_order_items";
  $result=$connect->query($sql);
  if($result->rowCount()>0){

    echo '<table class="table table-bordered">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>ORDER ID</th>";
    echo "<th>Item Name</th>";
    echo "<th>Quantity</th>";
    echo "<th>Unit</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row=$result->fetch(PDO::FETCH_ASSOC)){

      echo "<tr>";
      echo "<td>" .$row["order_items_id"]."</td>";
      echo "<td>" .$row["order_id"]."</td>";
      echo "<td>" .$row["item_name"]."</td>";
      echo "<td>" .$row["item_quantity"]."</td>";
      echo "<td>" .$row["item_unit"]."</td>";
       echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  }else{
    echo  "0 Results";
  }
  ?>
  </div>
     </div>

     
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
  html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 // insert data

 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');

  }
 });
 
});

//display table
$('#insert_data').click(function(){

  $.ajax({
 url:'insert.php',
 type:'post',

 success:function(responsedata){

      $('#response').html(responsedata)
 }
  });
});

</script>
