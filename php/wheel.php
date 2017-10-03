<?php include "php_utils.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wheel of Fortune</title>
        <link rel="stylesheet" href="../main.css">
    </head>
    <body>
        <?php echo play_sound( WHEEL_SPIN, false, "../media/audio" ); ?>
        <div id="wheel-wrapper">
            <h1 id="down-arrow">&#x21E9;</h1>
            <div id="wheel">
                <ul>
                    <?php
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
                        for ( $i = 0; $i < 24; $i++ ) {
                            echo "<li><div class=\"slice-contents\"><span>";
                            echo $money_amounts[ $i ][ "display" ];
                            echo "</span></div></li>";
                        }
                    ?>
                    <style type="text/css" rel="stylesheet">
                        #wheel {
                        <?php
                            $numberOfSections = count( $money_amounts );
                            $wheel_index      = rand( 0, $numberOfSections-1 );
                            $wheel_anim = "wheel-rotation-$wheel_index";

                            $prev_wheel_index = isset($_GET["prev_wheel_index"]) ? $_GET["prev_wheel_index"] : 0;

                            echo "-webkit-animation-name : $wheel_anim;";
                            echo "-o-animation-name : $wheel_anim;";
                            echo "animation-name : $wheel_anim;";
                            echo "transform : rotate(".($prev_wheel_index*(360/$numberOfSections))."deg);";
                        ?>
                        }
                    </style>
                </ul>
                <img src="../media/img/wheel_of_fortune_wheel_center.png">
            </div>
            <?php
                echo "<h1>$wheel_index</h1>";
                echo "<h1>" . ( $money_amounts[ $wheel_index ][ "display" ] ) . "</h1>";
                echo "<input hidden name=\"prev_wheel_index\" type=\"text\" value=\"$wheel_index\">";
            ?>
        </div>
    </body>
</html>