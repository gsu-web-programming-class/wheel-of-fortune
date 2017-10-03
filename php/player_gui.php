<?php if ( isset( $player_being_configured ) ): ?>
    <h1>
        <?php
            if ( isset( $players ) ) {
                echo $players[ $player_being_configured - 1 ][ "name" ];
            } ?>
    </h1>
    <h2>&dollar;
        <?php
            if ( isset( $players ) ) {
                echo $players[ $player_being_configured - 1 ][ "score" ];
            } ?>
    </h2>
    <input
            pattern="[A-z]"
            id="user_guess"
            type="text"
        <?php if ( $player_turn == $player_being_configured ): ?>
            required
        <?php else: ?>
            disabled
        <?php endif ?>
            autofocus
            name="user_guess"
            title="Type your guess, then press enter"
            autocomplete="off" />
    <input type="submit"
        <?php if ( $player_turn != $player_being_configured ): ?>
            disabled
        <?php endif ?>
           value="Submit Guess">
<?php endif ?>
