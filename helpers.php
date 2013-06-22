<?php
function url2spoj($text, $code, $description){
    ?>
    <a href="http://www.spoj.com/ABRAMOV/problems/<?php echo $code ?>/"><?php echo $text ?></a>:
    <?php
    echo "$description ($code)";
}
?>
