<?php

#connect to database

$dbconn = pg_connect("host=localhost dbname=art-website user=art-website password=P@ssw0rd");

if(!$dbconn) 
{
    echo "Error : Unable to open database";
} 
else 
{
    echo "Opened database successfully";
}


# the query

$paintingName = $_GET['name']; 

$sql =
    "SELECT * 
    FROM paintings
    WHERE name = 'Churchhaven' ";

$query = pg_query($dbconn, $sql);

if(!$query) 
{
     echo pg_last_error($db);
     exit;
} 

while($row = pg_fetch_row($query)) 
{
    $date = $row[0];
    $price = $row[1];
    $height = $row[2];
    $width = $row[3];
    $description = $row[4];
    $name = $row[5];
    $medium = $row[7];
  }
 
  echo "Operation done successfully123";
  pg_close($dbconn);
?>
<html>
<head>
</head>
<body>

    <ul>
        <li>name: <?php echo $name; ?></li>
        <li>medium: <?php echo $medium; ?></li>
        <li>price: <?php echo $price; ?></li>
        <li>height: <?php echo $height; ?></li>
        <li>width: <?php echo $width; ?></li>
        <li>description: <?php echo $description; ?></li>
    </ul>





</body>
</html>