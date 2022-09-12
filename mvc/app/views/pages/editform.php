
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="<?php echo URLROOT .'css/editform.css'?>">
</head>
<body>
<h2>Edit Form</h2>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   <form action="<?php echo URLROOT.'Pages/editsave'?>" method="post" >
   <input type="hidden" id="empId" name="id" value= '<?php  echo $data->Employee_id ?>' placeholder="Id">
       <input type="text" id="id"  value= '<?php echo $data->First_name ?>' name="first_name" placeholder="First name">
       <input type="text" id="id" name="last_name" value= '<?php echo $data->Last_name ?>' placeholder="Last name">
       <input type="email" id="id" name="email"value= '<?php echo $data->Email ?>' placeholder="Email">
       <input type="number" id="id" name="Phone_number" value= '<?php echo $data->Phone_no ?>' placeholder="Phone number">
       <input type="text" id="id" name="street" value= '<?php  echo $data->Street ?>' placeholder="Street name">
       <input type="text" id="id" name="city" value= '<?php echo $data->City ?>' placeholder="City">
       <input type="text" id="id" name="state" value= '<?php echo $data->State ?>' placeholder="State">
       <input type="text" id="id" name="country"  value= '<?php echo $data->Country ?>' placeholder="Country">
       <input type="number" id="id" name="zip" size="6" value= '<?php echo $data->zip ?>' placeholder="Zip number">
       <input type="file" id="id" name="file" value= '<?php echo $data->Photo ?>'>
       <button id="id" type="submit">submit</button>
   </form>
  </div>
</div>
</body>
</html>