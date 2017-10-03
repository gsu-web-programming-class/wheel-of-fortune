<?php include 'php/php_utils.php';
    if ( isset( $prev_wheel_index ) ) {
        print_r( $prev_wheel_index );
    }

    $phrases = [
        [ 'A DIME', 'A DOZEN' ],
        [ 'BAG OF', 'TRICKS' ],
        [ 'CASH COW', '' ],
        [ 'CHAIN OF', 'EVENTS' ],
        [ 'DIVIDE AND', 'CONQUER' ],
        [ 'EXACT CHANGE' ],
        [ 'FAME AND', 'FORTUNE' ],
        [ 'GOING GREEN' ],
        [ 'IF THE', 'SHOE FITS' ],
        [ 'JUST ADD', 'WATER' ],
        [ 'MY CUP', 'OF TEA' ],
        [ 'NOBODY IS', 'PERFECT' ],
    ];
    if ( isset( $_GET[ "money_amounts" ] ) ) {
        $money_amounts = unserialize( $_GET[ "money_amounts" ] );
    }
    if ( isset( $_POST[ "money_amounts" ] ) ) {
        $money_amounts = unserialize( $_POST[ "money_amounts" ] );
    }

    $player_turn      = isset( $_POST[ "player_turn" ] ) ? $_POST[ "player_turn" ] : 1;
    $prev_wheel_index = isset( $_POST[ "prev_wheel_index" ] ) ? $_POST[ "prev_wheel_index" ] : 0;

    $is_initial_load = true;
    if ( isset( $_POST[ "user_guess" ] ) ) {
        $user_guess        = $_POST[ "user_guess" ];
        $user_guess_length = strlen( $user_guess );
        if ( $user_guess_length > 0 ) {
            $user_guess = substr( $user_guess, $user_guess_length - 1, 1 );
        } else {
            unset( $user_guess );
        }
        $is_initial_load = false;
        $players         = [
            [ "name" => $_POST[ "player_1_name" ], "score" => $_POST[ "player_1_score" ] ],
            [ "name" => $_POST[ "player_2_name" ], "score" => $_POST[ "player_2_score" ] ],
        ];
        $game_phrase     = $_POST[ "game_phrase" ];
    } else if ( isset( $_GET[ "start" ] ) ) {
        $players           = [
            [ "name" => $_GET[ "player_1_name" ], "score" => 0 ],
            [ "name" => $_GET[ "player_2_name" ], "score" => 0 ],
        ];
        $is_initial_load   = false;
        $game_phrase_array = $phrases[ rand( 0, count( $phrases ) ) ];
        $game_phrase       = join( " ", $game_phrase_array );
    } else {
        $sound         = play_sound( INTRO_THEME, true );
        $money_amounts = [
            0  => [ "value" => 300, "display" => "$300" ],
            1  => [ "value" => 300, "display" => "$300" ],
            2  => [ "value" => 300, "display" => "$300" ],
            3  => [ "value" => 350, "display" => "$350" ],
            4  => [ "value" => 350, "display" => "$350" ],
            5  => [ "value" => 400, "display" => "$400" ],
            6  => [ "value" => 400, "display" => "$400" ],
            7  => [ "value" => 400, "display" => "$400" ],
            8  => [ "value" => 450, "display" => "$450" ],
            9  => [ "value" => 450, "display" => "$450" ],
            10 => [ "value" => 500, "display" => "$500" ],
            11 => [ "value" => 500, "display" => "$500" ],
            12 => [ "value" => 550, "display" => "$550" ],
            13 => [ "value" => 600, "display" => "$600" ],
            14 => [ "value" => 600, "display" => "$600" ],
            15 => [ "value" => 700, "display" => "$700" ],
            16 => [ "value" => 700, "display" => "$700" ],
            17 => [ "value" => 750, "display" => "$750" ],
            18 => [ "value" => 800, "display" => "$800" ],
            19 => [ "value" => 800, "display" => "$800" ],
            20 => [ "value" => 850, "display" => "$800" ],
            21 => [ "value" => 900, "display" => "$900" ],
            22 => [ "value" => 900, "display" => "$900" ],
            23 => [ "value" => 5000, "display" => "$5000" ],
        ];
        shuffle( $money_amounts );
    }

    $letters = [ "A" => 0,
                 "B" => 0,
                 "C" => 0,
                 "D" => 0,
                 "E" => 0,
                 "F" => 0,
                 "G" => 0,
                 "H" => 0,
                 "I" => 0,
                 "J" => 0,
                 "K" => 0,
                 "L" => 0,
                 "M" => 0,
                 "N" => 0,
                 "O" => 0,
                 "P" => 0,
                 "Q" => 0,
                 "R" => 0,
                 "S" => 0,
                 "T" => 0,
                 "U" => 0,
                 "V" => 0,
                 "W" => 0,
                 "X" => 0,
                 "Y" => 0,
                 "Z" => 0, ];

    if ( isset( $game_phrase ) ) {
        $alphabet = array_keys( $letters );
        for ( $i = 0; $i < count( $letters ); $i++ ) {
            $letter             = $alphabet[ $i ];
            $letters[ $letter ] = substr_count( $game_phrase, $letter );
        }
    }
    if ( isset( $user_guess ) ) {
        $user_guess = strtoupper( $user_guess );
        if ( $letters[ $user_guess ] == 0 ) {
            $sound              = play_sound( BUZZER );
            $sound              .= play_sound( WHEEL_SPIN );
            $user_guess_was_bad = true;
            $player_turn        = $player_turn == 1 ? 2 : 1;
        } else {
            if ( isset( $players ) && isset( $players[ $player_turn - 1 ] ) && isset( $money_amounts ) ) {
                $score                                  = $letters[ $user_guess ] * $money_amounts[ $prev_wheel_index ][ "value" ];
                $players[ $player_turn - 1 ][ "score" ] += $score;
            }
            $user_guess_was_bad = false;
            $sound              = play_sound( DING );
        }
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
        <?php if ( isset( $sound ) ) {
            echo $sound;
        } ?>
        <?php if ( ! $is_initial_load ) : ?>
            <form id="main_game_form" action="index.php" method="post">
                <div id="wheel-wrapper">
                    <p id="down-arrow">&#x21E9;</p>
                    <div id="wheel">
                        <ul>
                            <?php for ( $i = 0; $i < 24; $i++ ) {
                                echo "<li><div class=\"slice-contents\"><span>";
                                if ( isset( $money_amounts ) ) {
                                    echo $money_amounts[ $i ][ "display" ];
                                }
                                echo "</span></div></li>";
                            } ?>
                            <style type="text/css" rel="stylesheet">
                                #wheel {
                                <?php
                                    if(isset($money_amounts)){
                                        $numberOfSections = count( $money_amounts );
                                        if(isset($user_guess_was_bad) && $user_guess_was_bad) {
                                            $wheel_index      = rand( 0, $numberOfSections-1 );
                                            $prev_wheel_index = $wheel_index;
                                            $wheel_anim = "wheel-rotation-$wheel_index";

                                            echo "-webkit-animation-name : $wheel_anim;";
                                            echo "animation-name : $wheel_anim;";
                                        }else $wheel_index = $prev_wheel_index;
                                        echo "transform : rotate(".($prev_wheel_index*(360/$numberOfSections)-(360/$numberOfSections*0.5))."deg);";
                                    }
                                ?>
                                }
                            </style>
                        </ul>
                        <img src="media/img/wheel_of_fortune_wheel_center.png">
                    </div>
                </div>
                <?php
                    echo "<input hidden name=\"money_amounts\" type=\"text\" value=\"" . htmlentities( serialize( $money_amounts ) ) . "\">";

                    if ( isset( $wheel_index ) ) {
                        echo "<input hidden name=\"prev_wheel_index\" type=\"text\" value=\"$wheel_index\">";
                    } else if ( isset( $prev_wheel_index ) ) {
                        echo "<input hidden name=\"prev_wheel_index\" type=\"text\" value=\"$prev_wheel_index \">";
                    }
                    if ( isset( $players ) ) {
                        echo "<input hidden name=\"player_1_name\" type=\"text\" value=\"" . $players[ 0 ][ "name" ] . "\">";
                        echo "<input hidden name=\"player_2_name\" type=\"text\" value=\"" . $players[ 1 ][ "name" ] . "\">";
                        echo "<input hidden name=\"player_1_score\" type=\"text\" value=\"" . $players[ 0 ][ "score" ] . "\">";
                        echo "<input hidden name=\"player_2_score\" type=\"text\" value=\"" . $players[ 1 ][ "score" ] . "\">";
                    }
                    if ( isset( $game_phrase ) ) {
                        echo "<input hidden name=\"game_phrase\" type=\"text\" value=\"$game_phrase\">";
                    }
                    echo "<input hidden name=\"player_turn\" type=\"text\" value=\"$player_turn\">";
                ?>

                <div id="player_1_gui">
                    <?php
                        $player_being_configured = 1;
                        include "php/player_gui.php" ?>
                </div>
                <div>
                    <h1><?php if ( isset( $game_phrase ) ) {
                            echo "\"$game_phrase\"";
                        } ?></h1>
                </div>
                <div id="player_2_gui">
                    <?php
                        $player_being_configured = 2;
                        include "php/player_gui.php" ?>
                </div>
            </form>
        <?php else: ?>
            <form action="index.php" method="get">
                <?php if ( isset( $money_amounts ) ) {
                    echo "<input hidden name=\"money_amounts\" type=\"text\" value=\"" . htmlentities( serialize( $money_amounts ) ) . "\">";
                } ?>
                <input type="text" required name="player_1_name" placeholder="Player 1 Name" />
                <input type="text" required name="player_2_name" placeholder="Player 2 Name" />
                <input type="submit" value="Start" name="start">
            </form>
        <?php endif; ?>
    </body>
</html>