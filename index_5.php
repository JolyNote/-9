<?php
function reverse_string ($strl) {
    $n = strlen($strl);
    if($n==1)
    {
        return $strl;
    }
    else
    {
        $n--;
        return reverse_string(substr($strl,1,$n)) . substr($strl,0,1);
    }
}
print_r(reverse_string('123456')."\n");