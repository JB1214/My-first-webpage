<?php

include("functions.php");



$table="agents";

$data=Array(
"AgtFirstName"=>"Jane",

"AgtLastName"=>"Doe",

"AgtBusPhone"=>"403-555-5555",

"AgtEmail"=>"happy@gmail.com",

"AgtPosition"=>"Junior Agent",

"AgencyId"=>1);



$result =build_sql_insert($table,
$data);

print($result);

?>

