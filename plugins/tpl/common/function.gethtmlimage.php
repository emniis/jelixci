<?php

function jtpl_function_common_gethtmlimage($tpl, $html,$pos=0)
{
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/Ui', $html, $matches);
    echo $matches[1][$pos];
}
?>