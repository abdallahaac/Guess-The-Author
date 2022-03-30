<?php
include 'includes.php';


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
    <p class='iscorrect result final'><?php scoreboard($con) ?></p>
    <div class="quote-container">
        <?php echo "<h4> $authorQuote </h4>" ?>
        <form action="#" method="POST" autocomplete="off">
            <input name="userGuess" type="text" maxlength="50" required>
            <input id="submit" type="submit" name="submit-button ">
            <input type="hidden" name="author" value="<?php echo $authorName ?>">
            <span class="iscorrect points">Pointss:</span>
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