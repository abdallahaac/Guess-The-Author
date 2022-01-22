<?php

include "connection.php";

$sql =  "select authorName, quotes from authorQuotes ORDER BY RAND() limit 1;";
$result = $con->query($sql);

$row = $result->fetch_array(MYSQLI_NUM);
$authorName =  $row[0];
$authorQuote = $row[1];




$result->free_result();