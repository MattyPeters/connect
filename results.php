<html>
<head>

<?php
function showresults {

$query = "SELECT wine_name, variety, year, winery_name, region_name, cost, on_hand
FROM winery, region, wine, grape_variety, inventory, wine_variety
WHERE winery.region_id = region.region_id
AND wine.winery_id = winery.winery_id"
AND wine.wine_id = inventory.wine_id"
AND wine.wine_id = wine_variety.wine_id"
AND grape_variety.variety_id = wine_variety.variety_id";

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
    } // end if $rowsFound body

}
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


showresults();

?>




</body>
</html>
