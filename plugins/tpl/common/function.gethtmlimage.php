<?php

function jtpl_function_common_gethtmlimage($tpl, $html,$pos=0, $default='')
{
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/Ui', $html, $matches);
    if(!empty($matches[1][$pos])){
        echo $matches[1][$pos];
    }else{
        echo $default;
    }
    
}
?>
