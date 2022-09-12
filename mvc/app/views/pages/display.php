<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php  echo URLROOT .'css/displayadmin.css'?>">
    
</head>
<body>
    <div class="srch_lgout">
  <form action="<?php echo URLROOT .'pages/search'?>" method="post">
      <input type="text" name="inputname">
      <input type="submit" value="Search">
  </form>  
  <form action="<?php echo URLROOT.'pages/logout' ?>"><input type="submit" value="Logout" id="logout" ></form></div>


 <table id="tdcolor" >
    <tr>
        <th>
            Employee id
        </th>
        <th>
            First name
        </th>
        <th>
            Last name 
        </th>
        <th>
            Email
        </th>
        <th>
            Phone number
        </th>
        <th>
            Street name
        </th>
        <th>
            City 
        </th>
        <th>
            State
        </th>
        <th>
           Country
        </th>
        <th>
            Zip
        </th>
        <th>
            photo 
        </th>
        <th>
            Action 
        </th>
    </tr>
    <?php

    foreach($data as $dd1)
{
    echo '<tr>';
       echo '<td>' . $dd1->Employee_id . '</td>';
       echo '<td>' . $dd1->First_name . '</td>';
       echo '<td>' . $dd1->Last_name . '</td>';
       echo '<td>' . $dd1->Email . '</td>';
       echo '<td>' . $dd1->Phone_no . '</td>';
       echo '<td>' . $dd1->Street . '</td>';
       echo '<td>' . $dd1->City . '</td>';
       echo '<td>' . $dd1->State . '</td>';


       echo '<td>' . $dd1->Country . '</td>';
       echo '<td>' . $dd1->zip . '</td>';
       ?>
       <td> <img src="<?php echo URLROOT. "img/".$dd1->Photo; ?>" width="100px" height="100px"> </td>
  
       
       <td>
           <button><a class="btn btn-info" href="<?php echo URLROOT . 'pages/edit/'?><?php echo $dd1->Employee_id ?>">Edit</a></button>&nbsp;
           <button><a class="btn btn-danger" href="<?php echo URLROOT . 'pages/delete/'?><?php echo  $dd1->Employee_id; ?>">Delete</a></button>
        </td>
       <?php
    echo  '</tr>';   
}

'</table>'?>
<!-- <script type="text/javascript">
    $('#deletebtn').live('click', function() {
        debugger;
        let url='http://localhost/mvc/pages/delete/id='+1;
    $.get(url);

    return false;
});
    
    </script> -->
   
    <button id="btnExport" onclick="exportReportToExcel(this)">EXPORT REPORT</button>
    <script>
function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
 
}
</script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>


<form action="<?php echo URLROOT .'pages/login1' ?>">
<input type="submit" value="Admin Page">
</form>

    </body>
</html>