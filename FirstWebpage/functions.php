<?php

function build_sql_insert($table, $form) {

    $dbh = @mysqli_connect("localhost","root","") or die("unable to connect<br />");

    if (mysqli_select_db($dbh, "travelexperts"))
    {
        print("Selected DB: travelexperts<br />");
    }

    else
    {
        print("can't select DB: travelexperts<br />");
        exit();
    }


    $key = array_keys($form);

	$val = array_values($form);

	$sql = "INSERT INTO Agents (".implode(', ',$key) .") "." VALUES ('" .implode("', '", $val). "')";

    echo "$sql";



    $outcome = mysqli_query($dbh, $sql);

    if ($outcome)
    {
        return("<br/>Row was inserted");
    }

    else
    {
        return("There was an error inserting the row");
    } 

}

?>