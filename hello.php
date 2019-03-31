<?php

$mark_of_the_ninja = array(
    308, 444, 424, 404, 128, 488, 440, 388, 432, 444, 460, 464, 128, 320, 288, 320, 128,
    424, 404, 128, 416, 468, 460, 464, 444, 428, 456, 468, 464, 404, 448, 456, 420, 460,
    440, 388, 132
);

$secret_msg = "";
for ($i = 1; i < count($mark_of_the_ninja); ++$i) {
    $secret_msg .= chr($mark_of_the_ninja[$i] >> 2);
}

    echo $secret_msg . "\n";
?>
