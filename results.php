<html>
<head>


</head>
<body>
<?php

$winename = $_GET['WineName'];
/*
$winery = $_GET['WineryName'];
$region = $_GET['Region'];

$type = $_GET['variety_id'];
$lowyear = $_GET['year'];
$minqty = $_GET['Minqty'];
$maxqty = $_GET['Maxqty'];
$mincost = $_GET['Mincost'];
$maxcost = $_GET['Maxcost'];
*/
echo $winename;

?>

</body>

</html>
/*
function showresults {

 $rowsFound = @ mysql_num_rows($result);

    // If the query has results ...
    
    $rowsFound = @ mysql_num_rows($result);
    if ($rowsFound > 0) {
      // ... print out a header
      print "Wines of $regionName<br>";

      // and start a <table>.
      print "\n<table>\n<tr>" .
          "\n\t<th>Wine ID</th>" .
          "\n\t<th>Wine Name</th>" .
          "\n\t<th>Year</th>" .
          "\n\t<th>Winery</th>" .
          "\n\t<th>Description</th>\n</tr>";
          
          while ($row = @ mysql_fetch_array($result)) {
        // Print one row of results
        print "\n<tr>\n\t<td>{$row["wine_id"]}</td>" .
            "\n\t<td>{$row["wine_name"]}</td>" .
            "\n\t<td>{$row["year"]}</td>" .
            "\n\t<td>{$row["winery_name"]}</td>" .
            "\n\t<td>{$row["description"]}</td>\n</tr>";
      } // end while loop body

      // Finish the <table>
      print "\n</table>";
    } // end if $rowsFound body

  // Start a query ...
  $query = "SELECT wine_id, wine_name, description, year, winery_name
FROM winery, region, wine
WHERE winery.region_id = region.region_id
AND wine.winery_id = winery.winery_id";

  // ... then, if the user has specified a region, add the regionName
  // as an AND clause ...
  if (isset($regionName) && $regionName != "All") {
    $query .= " AND region_name = '{$regionName}'";
  }

  // ... and then complete the query.
  $query .= " ORDER BY wine_name";

showresults(
*/

