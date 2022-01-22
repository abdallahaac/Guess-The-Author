<?php

include "connection.php";

$sql =  "SELECT QUOTES FROM authorQuotes ORDER BY RAND() LIMIT 1";
$result = $con->query($sql);

$row = $result->fetch_array(MYSQLI_NUM);
printf("%s \n", $row[0]);
$result->free_result();