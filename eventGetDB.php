<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

   $host        = "host=xxxxxx";
   $port        = "port=5432";
   $dbname      = "dbname=xxxx";
   $credentials = "user=postgres password=1234";

$db = pg_connect("$host $port $dbname $credentials");
echo $db;

// Retrieve data from Query String
// Table: event_info
$event_id = $_POST['event_id'];
$event_name = $_POST['event_name'];
$event_lat = $_POST['event_lat'];
$event_long = $_POST['event_long'];
// Table: event_duration
$event_date = $_POST['event_date']; //event start date
$event_end = $_POST['event_name'];  //event end date
$event_time = $_POST['event_time']; //event time start

$sql = "SELECT event_id, event_name, event_lat, event_long from event_info where event_id = '$event_id'";


$ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   }

// Print result on screen
while ($line = pg_fetch_row($ret)) {
    foreach ($line as $col_value) {
        echo $col_value.",";
    }
}
pg_close($db);

?>
