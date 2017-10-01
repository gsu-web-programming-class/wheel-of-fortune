<?php
	//    CONSTANTS
	define( "INTRO_THEME", "intro_theme.mp3" );
	define( "WHEEL_SPIN_LONG", "wheel_spin_long.mp3" );
	define( "BANKRUPT", "bankrupt.mp3" );
	define( "CHOOSE_LETTERS_MUSIC", "choose_letters_music.mp3" );
	define( "BUZZER", "buzzer.mp3" );
	define( "WHEEL_SPIN", "wheel_spin.mp3" );
	define( "PUZZLE_REVEAL", "puzzle_reveal.mp3" );
	define( "PUZZLE_REVEAL_2", "puzzle_reveal_2.mp3" );
	define( "DING", "ding.mp3" );
	define( "WHAT_IS_THIS_FOR", "what_is_this_for.mp3" );
	define( "PUZZLE_SOLVE", "puzzle_solve.mp3" );

	//    FUNCTIONS

	/**
	 * @param $sound "the sound to use as defined in php_utils.php"
	 * @param $loop "whether or not the sound should loop indefinitely"
	 *
	 * @return string "the html to be inserted to the document. This will automatically play"
	 */
	function play_sound( $sound, $loop = false, $path_to_audio_dir = "media/audio" ) {
		return "<audio " . ( $loop ? "loop" : "" ) . " autoplay src=\"$path_to_audio_dir/$sound\"></audio>";
	}

	function char_after_first_occurrence( $str, $searchStr ) {
		$index = strpos( $str, $searchStr );
		if ( $index ) {
			return substr( $str, $index + strlen( $searchStr ), 1 );
		} else {
			return "[NOT FOUND]";
		}
	}

	function echo_if( $bool, $strTrue, $strFalse = false ) {
		if ( $bool ) {
			echo( $strTrue );
		} else if ( $strFalse ) {
			echo( $strFalse );
		}
	}

	function is_even( $num ) {
		return $num % 2 == 0;
	}

	function get_username_from_email( $email ) {
		preg_match( "/(.*)@.*/", $email, $matches );

		return $matches[1];
	}

	function rand_element( $arr ) {
		return $arr[ rand( 0, sizeof( $arr ) ) ];
	}