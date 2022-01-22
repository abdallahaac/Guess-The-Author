<?php
include 'includes.php';



if (isset($_POST['submit-button'])) {

    $userGuess = strip_tags($_POST['userGuess']);
    $author = $_POST['author'];
}

if ($userGuess == $author) {
    echo "<p class='iscorrect'>right</p>";
} else {
    echo "<p class='iscorrect'>wrong</p> ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css" />
    <title>GTA</title>
</head>

<body>

    <div class="quote-container">
        <?php echo "<h4> $authorQuote </h4>" ?>
        <form action="#" method="POST">
            <input name="userGuess" type="text" maxlength="50">
            <input id="submit" type="submit" name="submit-button">
            <input type="hidden" name="author" value="<?php echo $authorName ?>">
        </form>
        <!-- <p name="author"></p> -->
    </div>


</body>

<style>
/* p {
    position: absolute;
    background: #063;
    bottom: 0px;
    right: 43%;
    left: 50%;
    margin-left: -150px;
    margin-bottom: 50px
} */
.iscorrect {
    font-family: monospace;
    position: absolute;
    bottom: 0;
    right: 0;
    margin-right: 150px;

}

#submit {
    color: orange;
}
</style>

</html>