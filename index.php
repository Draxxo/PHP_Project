<?php

$mg = '<ul>';
for($i=-17827;$i<=14588;$i+=7) {
    if($i%24==0)
        $mg .= '<li>' .$i. '</li>';
}
$mg .= '</ul>';

echo $mg;

?>