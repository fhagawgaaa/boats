<?php
    $ip = $_GET["ip"];
    $port = $_GET["port"];
    $time = $_GET["time"];
    
    if (validIP($ip) && validPort($port) && validTime($time)) {
        shell_exec("perl udp.pl " . $ip . " " . $port . " 65000 " . $time);
    }
    
    function validIP($var) {
        if (filter_var($var, FILTER_VALIDATE_IP)) {
            return true;     
        }    
        return false;
    }
    
    function validPort($var) {
        return is_numeric($var) && $var < 65535 && $var > 0;
    }
    
    function validTime($var) {
        return is_numeric($var) && $var > 0;
    }
?>
