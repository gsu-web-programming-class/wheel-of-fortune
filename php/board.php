<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>UI</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <!--    <link rel="stylesheet" type="text/css" href="board.css"/>-->
    </head>
    <body>
        <div>
            <?php
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
                function letter_count ( $phrase, $letters )
                {
                    $alphabet = array_keys( $letters );
                    for ( $i = 0; $i < count( $letters ); $i++ ) {
                        $letter             = $alphabet[ $i ];
                        $letters[ $letter ] = substr_count( $phrase, $letter );
                    }

                    return $letters;
                }

                // $words = 0;

                // function phrase_words ( $words, $phrases )
                // {
                //     $phrasewords = explode( " ", $phrases );
                //     foreach ( $phrasewords as $i => $key ) {
                //         $words++;
                //     }
                // }

                // $twoline = 0;
                // function split_if_need ( $words, $phrases, $twoline )
                // {
                //     if ( $words >= 3 ) {
                //         preg_match( '/^([^ ]+ +[^ ]+) +(.*)$/', $phrases, $matches );
                //         $twoline++;
                //     }
                // }

                // $userinput = '';
                // function check_letter ( $phrase, $A, $B, $C, $D, $E, $F, $G, $H, $I, $J, $K, $L, $M, $N, $O, $P, $Q, $R, $S, $T, $U, $V, $W, $X, $Y, $Z, $userinput )
                // {
                //     $phrase_length = strlen( $phrase );
                //     // for ( $a = 0; $a < $phrase_length; $a++ ) {
                //     //     if ( $($phrase[ $a ]) !== ){
                //     //
                //     //     }
                //     // }
                //     // else
                //
                // }


            ?>
        </div>
    </body>
</html>


