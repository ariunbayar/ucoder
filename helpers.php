<?php
date_default_timezone_set('UTC');


global $latest_time;


function url2spoj($text, $code, $description){
    ?>
    <a href="http://www.spoj.com/ABRAMOV/problems/<?php echo $code ?>/"><?php echo $text ?></a>:
    <?php
    echo "$description ($code)";
}

/**
 * Formats 30min duration into "10:30-11:00" like format
 * Args:
 *  $duration:   in minutes
 *  $start_time: in hours (e.g: 10:30 as 10.5)
 */
function to_time($duration, $start_time=null){
    global $latest_time;

    $latest_time = $latest_time or 0;
    if ($start_time) {
        $latest_time = intval($start_time * 3600);
    }
    $time_from = date("H:i", $latest_time);
    $latest_time += intval($duration * 60);
    $time_to = date("H:i", $latest_time);
    return sprintf("%s-%s", $time_from, $time_to);
}
?>
