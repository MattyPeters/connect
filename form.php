<html>
<head>
<?php
require_once('db.php');
if(!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)) {
echo 'Could not connect to mysql on ' . DB_HOST . '\n';
exit;
}
echo 'Connected to mysql <br />';
if(!mysql_select_db(DB_NAME, $dbconn)) {
echo 'Could not user database ' . DB_NAME . '\n';
echo mysql_error() . '\n';
exit;
}
echo 'Connected to database ' . DB_NAME . '\n';
?>
</head>

<body>







<form action = "#" method= "GET">
<br> Enter a Wine Name <br>
<input type="text" name="WineName" Value = "All">
<br> Enter a Winery Name <br>
<input type="text" name="WineryName" Value = "All">
<br> Choose Wine Region <br>
<select name="tableName">
<?php
$result = mysql_query("SELECT region_name FROM region");
while ($row = mysql_fetch_row($result)) {
   for ($i = 0; $i < mysql_num_fields($result); $i++) {
      
      echo '<option value="$row[i]">$row[i]</option>';
   }
}


?>
</select>
<br> Choose Grape Variety <br>         
<select name="Grape_Type">
           <option value="?">?
           <option value="?2">?2
           <option value="?3">?3
         </select>
<br> The range of years <br>         
<select name="LowerYears">
           <option value="?">?l
           <option value="?2">?2l
           <option value="?3">?3l
         </select>
<select name="Upperyears">
           <option value="?u">?u
           <option value="?2u">?2u
           <option value="?3u">?3u
         </select>
         
<br> Enter Min Amount of Wines <br>
<input type="text" name="Minqty" Value = "2">

<br> Enter Max Amount of Wines <br>
<input type="text" name="Maxqty" Value = "5">

<br> Enter Min Cost of Wines <br>
<input type="text" name="Mincost" Value = "10">

<br> Enter Max Cost of Wines <br>
<input type="text" name="Maxcost" Value = "100">
<br>
<br>
<input type="submit" value="Search">

<php 

// (2) Run the query on the winestore through the connection
  $query = "SELECT * FROM wine";
  $result = mysql_query($query);

  // Start the HTML body, and output preformatted text
  echo "<pre>\n";

  // (3) While there are still rows in the result set
  while ($row = mysql_fetch_row($result)) {
   for ($i = 0; $i < mysql_num_fields($result); $i++) {
      echo $row[$i] . " ";
   }
   // Print a carriage return to neaten the output
   echo "\n";
  }
  ?>
</body>
</html>
