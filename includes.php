<?php

include "connection.php";



$sql =  "select authorName, quotes from authorQuotes ORDER BY RAND() limit 1;";
$result = $con->query($sql);

$row = $result->fetch_array(MYSQLI_NUM);
$authorName =  $row[0];
$authorQuote = $row[1];

$result->free_result();

function scoreboard($con)
{
    if (isset($_POST['submit-button'])) {
        $userGuess =   strip_tags($_POST['userGuess']);
        $userGuess = str_replace("'", '', $userGuess);
        $author = $_POST['author'];


        echo "<p class='iscorrect result final'>" ?>
<?php if (verifyName($userGuess, $con) == $author && 'submit-button') {
            session_start();
            $_SESSION['i'] = isset($_SESSION['i']) ? ++$_SESSION['i'] : 1;
            echo $_SESSION['i'];
            // if ($_SESSION['i'] == 5) {
            //     echo "<p class='streak'>Your on a roll</p>";
            // }
        } else if (session_start() && $userGuess != $author) {
            echo "<p class='iscorrect result final'>0</p>";
            echo "<p class = 'errorMessage' id='errorMessage'>" . "Nice try but the author's name is: "  . "<span style='color:orange'>" . $author .  "</span>" . "</p>";

            session_destroy();
        } ?>
<? "</p>";
    }
}


function verifyName($userGuess, $con)
{
    $query = "SELECT  DISTINCT authorName,quotes,id FROM authorQuotes WHERE LOWER(authorName) LIKE LOWER('%%%{$userGuess}%%') LIMIT 1";
    $result = $con->query($query);
    $row = $result->fetch_array(MYSQLI_NUM);
    $authorName =  $row[0];
    $result->free_result();
    return $authorName;
}