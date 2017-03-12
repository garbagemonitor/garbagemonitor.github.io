<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheetd1
		.css" />
    </head>
    <body>
       
            <div id="content_area">
<?php
include('connect.php');

$sqlget = "SELECT * FROM DUSTBIN1";
$sqldata = mysqli_query($dbcon,$sqlget) or  die('ERROR');

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	
	$DateTime = $row['DateTime'] ;
	
	$DUSTBINID = $row['DUSTBINID'] ;
	
	$LEVEL = $row['LEVEL'] ;
	
	}
echo '<i style="color:darkblue;font-size:40px;font-family:calibri ;">
	<p> Statistics of Dustbin 1: </i> ';
echo "<p> Last update at:";
echo "$DateTime";		
echo "<p> Empty Level of Garbage Bin (in cm):";
echo "$LEVEL";		
echo '<i style="color:darkblue;font-size:15px;font-family:calibri ;">
<p> Garbage Level: </i> </p> ';
if ($LEVEL>40)
{
echo "$low";
}

if ((20<$LEVEL) && ($LEVEL<=40))
{
 echo "$medium";
}

if ($LEVEL<=20)
{
echo "$high";
}

?>
     </div>
            
            
        </div>
    </body>
</html>
