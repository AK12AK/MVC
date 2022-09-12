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
    


 <table id="tdcolor">
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
              <td> <img src="<?php echo "../public/img/".$dd1->Photo; ?>" width="100px" height="100px"> </td>

       
     
       <?php
    echo  '</tr>';   
}

'</table>'?>
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

    </body>
</html>