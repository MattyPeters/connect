<html>
<head>


</head>
<body>
<?php

$winename = $_GET['WineName'];
$winery = $_GET['WineryName'];
$region = $_GET['Region'];
$type = $_GET['Grape_Type'];
$lowyear = $_GET['LowerYears'];
$upyear = $_GET['UpperYears'];
$minqty = $_GET['Minqty'];
$maxqty = $_GET['Maxqty'];
$mincost = $_GET['Mincost'];
$maxcost = $_GET['Maxcost'];

echo $winename.$winery.$region.$lowyear.$minqty;

?>

</body>

</html>



