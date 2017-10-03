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
                $phrase1  = 'A DIME A DOZEN';
                $phrase2  = 'BAG OF TRICKS';
                $phrase3  = 'CASH COW';
                $phrase4  = 'CHAIN OF EVENTS';
                $phrase5  = 'DIVIDE AND CONQUER';
                $phrase6  = 'EXACT CHANGE';
                $phrase7  = 'FAME AND FORTUNE';
                $phrase8  = 'GOING GREEN';
                $phrase9  = 'IF THE SHOE FITS';
                $phrase10 = 'JUST ADD WATER';
                $phrase11 = 'MY CUP OF TEA';
                $phrase12 = 'NOBODY IS PERFECT';
                $A        = 0;
                $B        = 0;
                $C        = 0;
                $D        = 0;
                $E        = 0;
                $F        = 0;
                $G        = 0;
                $H        = 0;
                $I        = 0;
                $J        = 0;
                $K        = 0;
                $L        = 0;
                $M        = 0;
                $N        = 0;
                $O        = 0;
                $P        = 0;
                $Q        = 0;
                $R        = 0;
                $S        = 0;
                $T        = 0;
                $U        = 0;
                $V        = 0;
                $W        = 0;
                $X        = 0;
                $Y        = 0;
                $Z        = 0;
                $letters = array(
                    array("A",0),
                    array("B",0),
                    array("C",0),
                    array("D",0),
                    array("E",0),
                    array("F",0),
                    array("G",0),
                    array("H",0),
                    array("I",0),
                    array("J",0),
                    array("K",0),
                    array("L",0),
                    array("M",0),
                    array("N",0),
                    array("O",0),
                    array("P",0),
                    array("Q",0),
                    array("R",0),
                    array("S",0),
                    array("T",0),
                    array("U",0),
                    array("V",0),
                    array("W",0),
                    array("X",0),
                    array("Y",0),
                    array("Z",0)
                );
                function letter_count ( $phrase, $A, $B, $C, $D, $E, $F, $G, $H, $I, $J, $K, $L, $M, $N, $O, $P, $Q, $R, $S, $T, $U, $V, $W, $X, $Y, $Z )
                {
                    $phrase_length = strlen( $phrase );
                    for ( $a = 0; $a < $phrase_length; $a++ ) {
                        if ( $phrase[ $a ] === 'A' ) {
                            $A++;
                        } else if ( $phrase[ $a ] === 'B' ) {
                            $B++;
                        } else if ( $phrase[ $a ] === 'C' ) {
                            $C++;
                        } else if ( $phrase[ $a ] === 'D' ) {
                            $D++;
                        } else if ( $phrase[ $a ] === 'E' ) {
                            $E++;
                        } else if ( $phrase[ $a ] === 'F' ) {
                            $F++;
                        } else if ( $phrase[ $a ] === 'G' ) {
                            $G++;
                        } else if ( $phrase[ $a ] === 'H' ) {
                            $H++;
                        } else if ( $phrase[ $a ] === 'I' ) {
                            $I++;
                        } else if ( $phrase[ $a ] === 'J' ) {
                            $J++;
                        } else if ( $phrase[ $a ] === 'K' ) {
                            $K++;
                        } else if ( $phrase[ $a ] === 'L' ) {
                            $L++;
                        } else if ( $phrase[ $a ] === 'M' ) {
                            $M++;
                        } else if ( $phrase[ $a ] === 'N' ) {
                            $N++;
                        } else if ( $phrase[ $a ] === 'O' ) {
                            $O++;
                        } else if ( $phrase[ $a ] === 'P' ) {
                            $P++;
                        } else if ( $phrase[ $a ] === 'Q' ) {
                            $Q++;
                        } else if ( $phrase[ $a ] === 'R' ) {
                            $R++;
                        } else if ( $phrase[ $a ] === 'S' ) {
                            $S++;
                        } else if ( $phrase[ $a ] === 'T' ) {
                            $T++;
                        } else if ( $phrase[ $a ] === 'U' ) {
                            $U++;
                        } else if ( $phrase[ $a ] === 'V' ) {
                            $V++;
                        } else if ( $phrase[ $a ] === 'W' ) {
                            $W++;
                        } else if ( $phrase[ $a ] === 'X' ) {
                            $X++;
                        } else if ( $phrase[ $a ] === 'Y' ) {
                            $Y++;
                        } else if ( $phrase[ $a ] === 'Z' ) {
                            $Z++;
                        }
                    }
                }

                $words = 0;

                function phrase_words ( $words, $phrases )
                {
                    $phrasewords = explode( " ", $phrases );
                    foreach ( $phrasewords as $i => $key ) {
                        $words++;
                    }
                }

                $twoline = 0;
                function split_if_need ( $words, $phrases, $twoline )
                {
                    if ( $words >= 3 ) {
                        preg_match( '/^([^ ]+ +[^ ]+) +(.*)$/', $phrases, $matches );
                        $twoline++;
                    }
                }

                $userinput = '';
                function check_letter ( $phrase, $A, $B, $C, $D, $E, $F, $G, $H, $I, $J, $K, $L, $M, $N, $O, $P, $Q, $R, $S, $T, $U, $V, $W, $X, $Y, $Z, $userinput )
                {
                    $phrase_length = strlen( $phrase );
                    for ( $a = 0; $a < $phrase_length; $a++ ) {
                        if ( $($phrase[ $a ]) !== ){

                        }
                    }
                else

                }


            ?>
        </div>
    </body>
</html>


