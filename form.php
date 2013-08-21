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

<script type="text/javascript">
function validation (search) {
var l = document.getElementById("LowerYears");
var h = document.getElementById("Upperyears");
var lc = l.options[l.selectedIndex].value;
var hc = h.options[h.selectedIndex].value;
 if (lc >= hc) {
 alert("The lower range of years is higher than the higher range");
 return false;
 }
 else {
 return true;
 }
}
</script>
</head>

<body>





<form name = "search" action = "results.php" method= "GET" onsubmit="return validation(this);>
<br> Enter a Wine Name <br>
<input type="text" name="WineName" Value = "All">
<br> Enter a Winery Name <br>
<input type="text" name="WineryName" Value = "All">
<br> Choose Wine Region <br>
<select name = "Region">
<?php
$region = mysql_query("SELECT region_name, region_id FROM region");



while($row=mysql_fetch_array($region))
			{
				echo "<option value=$row[region_id]>$row[region_name]</option>";
			}
			echo "</select>";


?>

<br> Choose Grape Variety <br>         
<select name="Grape_Type">

<?php
$type = mysql_query("SELECT variety, variety_id FROM grape_variety");


while($typerow=mysql_fetch_array($type))
			{
				echo "<option value=$typerow[variety_id]>$typerow[variety]</option>";
			}
			echo "</select>";


?>
<br> The range of years <br>         
<select name="LowerYears">
          <?php
$lowyear = mysql_query("SELECT distinct year FROM wine group by year asc");


while ($lowyearrow = mysql_fetch_array($lowyear))


			{
				echo "<option value=$lowyearrow[year]>$lowyearrow[year]</option>";
			}
			echo "</select>";


?>
<select name="Upperyears">

    <?php
$highyear = mysql_query("SELECT distinct year FROM wine group by year asc");


while ($highyearrow = mysql_fetch_array($highyear))

			{
				echo "<option value=$highyearrow[year]>$highyearrow[year]</option>";
			}
			echo "</select>";

?>
         
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
<input type="submit" name = "button" value="Search">

</form>

</body>
</html>
