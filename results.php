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

results();

function results(){

$query = "SELECT wine_name, variety, year, winery_name, region_name, cost, on_hand
FROM winery, region, wine, grape_variety, inventory, wine_variety
WHERE winery.region_id = region.region_id
AND wine.winery_id = winery.winery_id
AND wine.wine_id = inventory.wine_id
AND wine.wine_id = wine_variety.wine_id
AND grape_variety.variety_id = wine_variety.variety_id";


if ($winename != "All") {
    $query .= " AND wine_name = '{$winename}'";}
/*    
if (isset($winery) && $winery != "All") {
    $query .= " AND winery_name = '{$winery}'";}

if (isset($region) && $region != "All") {
    $query .= " AND region_id = '{$region}'";}

if (isset($type) && $type != "All") {
    $query .= " AND variety = '{$type}'";}

if (isset($lowyear))  {
    $query .= " AND year >= '{$lowyear}'";}
    
if (isset($upyear))  {
    $query .= " AND year <= '{$upyear}'";}
    
if (isset($minqty))  {
    $query .= " AND on_hand >= '{$minqty}'";}
    
if (isset($maxqty))  {
    $query .= " AND on_hand <= '{$maxqty}'";}
    
if (isset($mincost))  {
    $query .= " AND cost >= '{$mincost}'";}
    
if (isset($maxcost))  {
    $query .= " AND cost <= '{$maxcost}'";}

*/
$result = mysql_query($query);

      print "Wines of $regionName<br>";

      // and start a <table>.
      print "\n<table>\n<tr>" .
          "\n\t<th>Wine Name</th>" .
          "\n\t<th>Variety</th>" .
          "\n\t<th>Year</th>" .
          "\n\t<th>Winery</th>" .
          "\n\t<th>Region</th>" .
          "\n\t<th>Cost</th>" .
          "\n\t<th>Avail</th>\n</tr>";
          
          while ($row = @ mysql_fetch_array($result)) {
        // Print one row of results
        print "\n<tr>\n\t<td>{$row["wine_name"]}</td>" .
            "\n\t<td>{$row["variety"]}</td>" .
            "\n\t<td>{$row["year"]}</td>" .
            "\n\t<td>{$row["winery_name"]}</td>" .
               "\n\t<td>{$row["region_name"]}</td>" .
                  "\n\t<td>{$row["cost"]}</td>" .
            "\n\t<td>{$row["on_hand"]}</td>\n</tr>";
             } // end while loop body

      // Finish the <table>
      print "\n</table>";

}
?>




</body>
</html>
