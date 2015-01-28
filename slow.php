<?php
    $ip = $_GET["ip"];
    $time = $_GET["time"];
    
    if (validIP($ip) && validTime($time)) {
        shell_exec("timeout " . $time . "s perl slow.pl -dns " . $ip );
    }
    
    function validIP($var) {
        if (isset($var) && $var != "") {
            return true;     
        }    
        return false;
    }
    
    function validTime($var) {
        return is_numeric($var) && $var > 0;
    }
?>
