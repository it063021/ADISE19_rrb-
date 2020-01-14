<?php
session_start();

$db_host="localhost";
$db_name="players_stats";
$db_user= "root";
$db_pass= "";
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo mysqli_connect_error($link);
    exit;
}

$sql = "SELECT * FROM players";

$result= mysqli_query($link, $sql);

if ($result=== false) {
  echo mysqli_error($link);
}

$json_array= array();

while ($row= mysqli_fetch_assoc($result)){
        $json_array[]= $row;
  }

echo '<pre>';
print_r($json_array);
echo '</pre>';
