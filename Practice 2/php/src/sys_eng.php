<?php
const PARAMETER_NAME = 'cmd';

function cmd($abc)
{
    $whitelist = array("ls", "ps", "whoami", "id", "pwd");
    if (! in_array($abc, $whitelist)) {
        throw new Exception("Wrong input");
    }
    $output = null;
    $retval = null;
    echo "$abc\n";
    exec($abc, $output, $retval);
    echo "Вернёт статус $retval и значение:\n";
    print_r($output);
}
