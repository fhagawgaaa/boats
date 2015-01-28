<?php
    $cmd = $_GET["cmd"];
    if (isset($cmd)) {
        switch($cmd){
            case "kill":
                 echo shell_exec("killall perl");
                break;
            case "ps":
                $output = shell_exec("ps");
                echo "<pre>$output</pre>";
                break;
        }
    }
?>
