<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT.'public/css/addform.css'?>">
</head>
<body>
  <div>
    
  </div>
<div class="box">
<h2>Admin page</h2>

<button id="myBtn">Add datas</button>
<form action="<?php echo URLROOT.'pages/display'?>" >
<button >Display</button>
</form>
</div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
   <form action="<?php echo URLROOT.'pages/add'?>" method="post" enctype="multipart/form-data" autocomplete="off" name="addform" onsubmit="return validateform()">
   <div id="timer"><?php
   
   if(isset($_SESSION['emailError']))
   {
     print_r($_SESSION['emailError']);
    
   }
   session_unset($_SESSION['emailError']);
   session_destroy($_SESSION['emailError']);
   ?></div>
       <input type="text" id="idfirst_name" name="first_name" placeholder="First name">
       <input type="text" id="idlast_name" name="last_name" placeholder="Last name">
       <input type="email" id="idemail" name="email" placeholder="Email">
       <input type="number" title="should be of 10 digits" id="idPhone_number" name="Phone_number" placeholder="Phone number - 75986 45800">
       <input type="text" id="idstreet" name="street" placeholder="Street name">
       <input type="text" id="idcity" name="city" placeholder="City">
       <input type="text" id="idstate" name="state" placeholder="State">
       <input type="text" id="idcountry" name="country" placeholder="Country">
       <input type="number" id="idzip" title="Should be pf 6 digits"  name="zip" placeholder="Zip number">
       <input type="file" id="idfile" name="file">
       <button id="emp_add" type="submit">submit</button>
   </form>
  </div>
</div>

<script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<form action="<?php echo URLROOT.'pages/logout' ?>"><input type="submit" value="Logout" id="logout" ></form>

<script>
function validateform(){
  let x = document.forms["addform"]["Phone_number"].value;
  if (x.toString().length != 10) {
    alert("Phone Num should be of 10 digits");
    return false;
  }
  let y= document.forms["addform"]["zip"].value;
  if (y.toString().length != 6) {
    alert("Zip should be of 6 digits");
    return false;
  }
  // let z= document.forms["addform"]["email"].value;
  // foreach

}

</script>
<script>
setTimeout(()=>{
  var error =document.getElementById("timer");
  error.style.visibility='collapse';

},2000)
</script>
</body>
</html>