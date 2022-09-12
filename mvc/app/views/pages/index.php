<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo URLROOT.'css/index.css'?>">
</head>
<body>

  <div class="index1css">
  <div >
    <form action="<?php echo URLROOT.'pages/login'?>" method="post" class="form1">
    <h3>Admin</h3>
      <input type="text" placeholder="User Name" id="idname" name="usrname">
      <input type="password" placeholder="Enter the password" id="idpassword" name="usrpassword">
      <p id="fade"><?php
      if(isset($data))
      {
      echo $data['ttt'];
      }
    ?></p>
      <button type="submit" id="idbutton">Login</button>
    </form>
  </div>
  <div class="index2css">
    <form action="<?php echo URLROOT .'pages/guestdisplay'?>" class="form2" method="post">
      <h3>Guest</h3>
      <button type="submit" id="idbutton">View</button>
    </form>
  </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>