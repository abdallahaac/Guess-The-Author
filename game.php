<?php
include 'includes.php';




function scoreboard($authorName)
{
    if (isset($_POST['submit-button'])) {
        $userGuess = strip_tags($_POST['userGuess']);
        $author = $_POST['author'];
        echo "<p class='iscorrect result final'>" ?><?php if ($userGuess == $author && 'submit-button') {
                                                        session_start();
                                                        $_SESSION['i'] = isset($_SESSION['i']) ? ++$_SESSION['i'] : 1;
                                                        echo $_SESSION['i'];
                                                    } else if (session_start() && $userGuess != $author) {
                                                        echo "<p class='iscorrect result final'>0</p>";
                                                        $display = 'true';
                                                        session_destroy();
                                                    } ?>
<? "</p>";
    }
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
    <p class='iscorrect result final'><?php scoreboard($authorName) ?></p>
    <div class="quote-container">
        <?php echo "<h4> $authorQuote </h4>" ?>
        <form action="#" method="POST">
            <input name="userGuess" type="text" maxlength="50" required>
            <input id="submit" type="submit" name="submit-button">
            <input type="hidden" name="author" value="<?php echo $authorName ?>">
            <span class="iscorrect points">Points:</span>

        </form>
        <!-- <p name=" author"></p> -->
    </div>
</body>
<script src="type.js">
var name = <?= json_encode($display) ?>;
alert('2');
</script>
<style>

</style>

</html>