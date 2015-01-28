<?php
    $cmd = $_GET["cmd"];
    if (isset($cmd)) {
        switch($cmd){
            case "kill":
                 echo shell_exec("killall perl");
                break;
            case "ps":
                $output = shell_exec("ps");
                if (strpos($output,'perl') !== false) {
                    echo 'true';
                } else {
                    echo 'false';
                }
                break;
        }
    }
?>
