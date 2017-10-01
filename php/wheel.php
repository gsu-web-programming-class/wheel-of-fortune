<?php include "php_utils.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wheel of Fortune</title>
        <link rel="stylesheet" href="../main.css">
    </head>
    <body>
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
					for ( $i = 0; $i < 24; $i ++ ) {
						echo "<li><p>";
						echo $money_amounts[ $i ]["display"];
						echo "</p></li>";
					}
				?>
            </ul>
        </div>
    </body>
</html>