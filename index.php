<?php include 'php/php_utils.php';

	$is_initial_load = true;
	if ( isset( $_POST["user_guess"] ) ) {
		$user_guess        = $_POST["user_guess"];
		$user_guess_length = strlen( $user_guess );
		if ( $user_guess_length > 0 ) {
			$user_guess = substr( $user_guess, $user_guess_length - 1, 1 );
		} else {
			unset( $user_guess );
		}
		$is_initial_load = false;
	} else if ( isset( $_GET["start"] ) ) {
		$is_initial_load = false;
		$sound           = play_sound( INTRO_THEME, true );
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wheel of Fortune</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php if (isset($sound)) {
            echo $sound;
        } ?>
        <h2>User Guess: <?php if ( isset( $user_guess ) ) {
                echo $user_guess;
            } ?></h2>
        <?php if (!$is_initial_load) : ?>
            <form action="index.php" method="post">
                <!-- TODO : Is that the best title? -->
                <input required pattern="[0-9A-z]+" id="user_guess" type="text" autofocus name="user_guess"
                       title="Type your guess, then press enter" autocomplete="off" />
            </form>
        <?php else: ?>
            <form action="index.php" method="get">
                <input type="submit" value="Start" name="start">
            </form>
        <?php endif; ?>
    </body>
</html>