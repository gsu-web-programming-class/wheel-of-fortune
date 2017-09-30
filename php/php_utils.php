<?php
	//    FUNCTIONS

	function charAfterFirstOccurrence( $str, $searchStr ) {
		$index = strpos( $str, $searchStr );
		if ( $index ) {
			return substr( $str, $index + strlen( $searchStr ), 1 );
		} else {
			return "[NOT FOUND]";
		}
	}

	function echoIf( $bool, $strTrue, $strFalse = false ) {
		if ( $bool ) {
			echo( $strTrue );
		} else if ( $strFalse ) {
			echo( $strFalse );
		}
	}

	function isEven( $num ) {
		return $num % 2 == 0;
	}

	function getUsernameFromEmail( $email ) {
		preg_match( "/(.*)@.*/", $email, $matches );

		return $matches[1];
	}

	function randElement( $arr ) {
		return $arr[ rand( 0, sizeof( $arr ) ) ];
	}